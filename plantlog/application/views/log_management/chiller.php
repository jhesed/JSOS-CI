<?php echo $header; ?>

<script src="<?php echo $this->config->item('static_url').'/js/lib/note.js'; ?>"></script>

<div class="container main">

    <div id="lobilist">
        <div id="lobilist-examples">
         
            <!--<h1>Examples</h1>
            <hr> -->
            <!--Basic example-->
            <div>
                <div class="bs-example">
                    <h2>Chillers 1</h2>
                    <div class="alert alert-warning"><strong>This is just a Prototype!</strong> Nothing added here are actually saved.  But you may try adding/editing/deleting a task or a group of task.  You may also want to try rearranging the note groups by drag and dropping the group to another column.</div> 
                    <div id="todo-lists-basic-demo"></div>

                </div>
            </div>
        
        </div>
    </div>
</div>


<?php echo $footer; ?>