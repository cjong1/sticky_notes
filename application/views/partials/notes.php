<?php
  foreach($notes as $note)
  {  ?>
    <div class='four columns' id='margin'>
      <h5 class='edit_title'><?= $note['title'] ?></h5>
      <form action="/notes/destroy" class='delete_note'>
          <input type='submit' value='x' name='delete' id='delete_note'>
          <input type='hidden' name='id' value="<?= $note['id'] ?>">
      </form>
      <div class="row">
        <form action="/notes/update">
            <textarea class='note_text' name='description' placeholder='What do you want to say?'><?= $note['description']?></textarea>
            <input type='hidden' value='Update'>
            <input type='hidden' name='id' value="<?= $note['id'] ?>">
        </form>
      </div>
    </div>
<?php
  }  ?>