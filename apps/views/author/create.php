<div class="alert alert-primary h3 text-center">
    Author Sign Up Form
</div>
<form action="">
    <div>
        <div class="mb-4">
            <label for="username">UserName</label>
            <input type="text" id="username" class="form-control" required placeholder="Enter username" name="username" pattern="[A-z0-9@#$_]{6,30}" title="You can only enter alpha numeric user name with use of @ or # or $ or _ . Minimum 6 letter and maximum 30" onchange="checkUser(this.value,userresult)"><span id="userresult"></span>
        </div>
        <div class="mb-4">
            <button class="btn btn-success">Submit</button>
        </div>
    </div>
</form>