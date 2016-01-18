<?php 

    $post_title = $post['Post']['post_title'];
    $post_summary = $post['Post']['post_summary'];
    $created = $post['Post']['created'];
    $post_id = $post['Post']['id'];
 ?>


<tr>
    <td><?php echo $post_count; ?></td>
    <td><?php echo $this->Time->format('F jS, Y', $created); ?></td>
    <td><?php echo $post_title; ?></td>
    <td><?php echo $post_summary; ?></td>
    <td><i class="fa fa-comment fa-fw"></i>26</td>
    <td>
       
         <input type="checkbox" class="checkbox" name="data[checked][]" value="<?php echo $post_id; ?>" />
       
    </td>
</tr>