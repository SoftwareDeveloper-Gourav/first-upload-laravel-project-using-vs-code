<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ajaxModel;

class AjaxController extends Controller
{
    //
    public function store(Request $data)
    {
      $save = new ajaxModel;
      $save->name=$data->name;
      $save->number=$data->number;
      $save->password=$data->password;
      $save->save();
      return response()->json([
           'status'=>true,
           'title'=>'Registered Successfull',
           'msg'=>'You Are Registered In Our Record...!',
           'icon'=>'success'
      ]);
    }




    public function showData(){
        $data=ajaxModel::all();
        $i=1;
        foreach ($data as $value) { ?>
<tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $value->name; ?></td>
    <td><?php echo $value->number; ?></td>
    <td><a href="edit/<?php echo $value->id; ?>" class="btn btn-primary">Edit</a></td>
    <td><a href="delete/<?php echo $value->id; ?>" class="btn btn-danger">Delete</a></td>
</tr>

<?php }


}

}