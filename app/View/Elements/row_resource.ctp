<?php 

    $title = $post['Resource']['title'];
    $desc = $post['Resource']['description'];
    
    $post_id = $post['Resource']['id'];
 ?>


<tr>
    <td><?php echo $post_count; ?></td>
    
    <td><?php echo $title; ?></td>
    <td><?php echo $desc; ?></td>
    
    <td>
       
         <input type="checkbox" class="checkbox" name="data[checked][]" value="<?php echo $post_id; ?>" />
       
    </td>
</tr>