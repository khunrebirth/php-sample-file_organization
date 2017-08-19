<section class="section">
	<div class="container">
	  <h1 class="title">
	    Hello, Form :D
	  </h1>
    <form method="post">
      <div class="field">
        <label class="label">DATE</label>
        <div class="control">
          <input class="input" type="text" name="date" placeholder="Enter Date" required>
        </div> 
      </div>
      <div class="field">
        <label class="label">EMAIL</label>
        <div class="control">
          <input class="input" type="text" name="email" placeholder="Enter Email" required>
        </div>
      </div>
      <div class="field">
        <label class="label">DESCRIPTION</label>
        <div class="control">
          <textarea class="textarea" name="desc" placeholder="Enter Description" required></textarea>
        </div>
      </div>
      <div class="field is-grouped">
        <div class="control">
          <input type="submit" class="button is-primary" value="SUBMIT">
        </div>
      </div>
    </form>
	</div>
</section>