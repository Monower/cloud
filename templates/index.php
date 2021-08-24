<body>
<div class="form-popuploginc" id="mylogin">
<form class="form" action="loginc.php" method="post">
	 <h2>LOGIN</h2>
	 <?php if (isset($_GET['error'])) { ?>
		 <p class="error"><?php echo $_GET['error']; ?></p>
	 <?php } ?>

     <label>login as</label>
                    <select class="clouds" name="loginas" id="no">
                                            <option value="1"></option>
                                            <option value="employer">Employer</option>
                                            <option value="employee">Employee</option>
                    </select>
	 <br>
                    <label>User Name</label>
	 <input type="text" name="username" placeholder="User Name"><br>

	 <label>Password</label>
	 <input type="password" name="password" placeholder="Password"><br>

	 <button type="submit">Login</button>
 </form>

</div>
	 </body>