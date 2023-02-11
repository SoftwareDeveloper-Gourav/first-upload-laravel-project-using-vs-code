<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Reg;
use App\Models\searchUser;
use App\Models\STUDENT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// use GuzzleHttp\Client as GuzzleClient;

class StudentController extends Controller
{
    public function index()
    {
        $data = STUDENT::with('babu')->where('id', 1)->get();
        return $data;
    }

    public function testLogin(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'password' => 'required',
        ]);
        $number = $request->number;
        $password = $request->password;

        $data = Login::where('number', $number)->first();
        if ($data) {
            $pass = Login::where('password', $data->password)->count();
            if ($pass > 0) {
                return "Login Successfull";
            } else {
                return "Invalid Password";
            }

        } else {
            return "Invalid Userid  Brother ";
        }

    }

    // <new>

    public function registration(Request $data)
    {
        if ($data->password == $data->c_password) {
            $insert = new Reg;
            $insert->name = $data->name;
            $insert->number = $data->number;
            $insert->email = $data->email;
            $insert->password = $data->password;

            $photo = $data->photo;
            $exten = $photo->getClientOriginalExtension();
            $photo_name = time() . '.' . $exten;
            $photo->move('uploads', $photo_name);

            $insert->photo = $photo_name;
            $insert->save();
            $msg = [
                'title' => 'Registered',
                'icon' => 'success',
            ];

        } else {
            $msg = [
                'title' => 'Confirm Password Not Match',
                'icon' => 'warning',
            ];
        }
        return json_encode($msg);

    }

    public function show()
    {
        $data = Reg::all();
        $i = 1;
        foreach ($data as $key => $value) {
            ?>
<tr>
    <td<?php echo $i++; ?> < /td>
        <td<?php echo $value['name']; ?> < /td>
            <td<?php echo $value['number']; ?>< /td>
                <td<?php echo $value['email']; ?>< /td>
                    <td><a class="btn btn-success">Update</a></td>
                    <td><a onclick="Delete(<?php echo $value['id']; ?>)" class="btn btn-danger">Delete</a></td>
</tr>

<?php
}

        // return view('testing.form');

    }

    public function delete(Request $data)
    {
        $id = $data->id;
        $data = Reg::find($id);
        if ($data) {
            $data->delete();
            return "Deleted";
        } else {
            return "Technical Problem";

        }

    }

    // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function testing(Request $data)
    {
        echo "<pre>";
        print_r($data->all());
        $data = self::hi($data->a, $data->b);
    }
    public function hi($b, $c)
    {
        echo $b + $c;
    }

    public function Call_API($url, $method)
    {
        $client = new GuzzleClient();
        $request = $client->request($method, $url);
        $response = $request->getBody()->getContents();
        return $response;
    }

    public function getPinCode($pin_id)
    {
        $url = "https://api.postalpincode.in/pincode/" . $pin_id;
        $method = "GET";
        $response = self::Call_Api_Curl($url, $method);
        return $response;
    }

    public function Call_Api_Curl($url, $method)
    {

        $url = $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $result = curl_exec($ch);
        return $result;

    }

    public function pincode(Request $request)
    {
        $request->validate([
            'pincode' => 'required|max:6|min:6',
        ]);
        $pincode = $request->pincode;
        $url = "https://api.postalpincode.in/pincode/" . $pincode;
        $method = "POST";
        $data = self::Call_Api_Curl($url, $method);
        $arr = json_decode($data);
        // echo "<pre>";
        $details = $arr[0];

        if ($details->Status == 'Success') {
            $success = $details->PostOffice[3];
            // echo "<pre>";
            // return print_r($success);
            // die();
            session()->flash('success', 'Processing Successfull..');
            return view('pincode.index', ['data' => $success]);
        } else {
            session()->flash('error', 'This Is Invalid Pincode..!');
            return view('pincode.index');
        }

    }

    public function pincodeCheck(Request $data)
    {
        $all = Http::get('https://api.postalpincode.in/pincode/' . $data->pincode);
        $details = json_decode($all);
        if ($details[0]->Status == 'Success') {
            session()->flash('success', 'Prossesing Successfull..!');
            $data = $details[0]->PostOffice[3];
            $com = compact('data');
            return view('pincode.index')->with($com);

        } else {
            session()->flash('error', 'Invalid Pincode..!');
            return view('pincode.index');

        }

    }

    // THIS IS A NEW SEARCH APPLICATION

    public function addUser(Request $data)
    {
        $data->validate([
            'name' => 'required',
            'number' => 'required|min:10|max:10',
            'password' => 'required|min:3',
            'c_password' => 'required| min:3|same:password',
        ]);
        $save = new searchUser;
        $save->name = $data->name;
        $save->number = $data->number;
        $save->password = $data->password;
        $save->save();
        $data->session()->flash('ok', 'New User Add successfull..!');
        return redirect()->back();

    }

    public function view()
    {
        $data = searchUser::all();
        return view('search.show', ['data' => $data]);
    }
    public function search(Request $request)
    {
        $search = $request->search;
        session()->flash('search', $search);
        $data = searchUser::where('name', 'LIKE', '%' . $search . '%')->orWhere('number', 'LIKE', '%' . $search . '%')->get();
        return view('search.show', ['data' => $data]);

    }

    public function json()
    {
        return response()->json([
            'status' => 'this json application is perfectly worked brother',
            'msg' => 'this json data is vary perfect',
        ]);

    }

    public function multipleDelete(Request $data)
    {
        $data->validate([
             'ids'=>'required'
        ]);
       $ids=$data->ids;
       
       $delete=searchUser::whereIn('id',$ids)->delete();
       return redirect()->back();

    }


    public function country()
    {
        $countrys=Http::get('https://api.first.org/data/v1/countries');
        $data=array($countrys->body());
        $all= $data[0];
        $country_data=json_decode($all);
        $apna_country=array($country_data);
        $desh=$apna_country[0]->data;
        // echo "<pre>";
        // print_r( $desh);
        return view('country_api.index',['data'=>$desh]);

        
    }


}