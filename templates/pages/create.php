<div class="notes__new">
    <?php if($params['created']): ?>
        <div class="notes__note">
            <div>Title: <?php echo$params['title'] ?></div>
            <div>Description: <?php echo$params['description'] ?></div> 
        </div>
    <?php else: ?>
    <div class="notes__head">
        <h2>New note</h2>  
    </div>
    <form class="form" action="/?action=create" method="POST">
        <ul>
            <li>
                <label>Title <span class="required">*</span></label>
                <input class="form__title" type="text" name="title" >
            </li>
            <li>
                <label for="">Note</label>
                <textarea name="description" id="field5" ></textarea>
            </li>
            <li>
                <input class="form__submit" type="submit" value="Submit">
            </li>
        </ul>
    </form>
    <?php endif ?>
</div>

