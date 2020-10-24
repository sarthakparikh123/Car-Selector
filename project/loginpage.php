
<html>
	<head>
		<title>login</title>
		<style>
			*
			{
				margin:0;
				padding:0;
			}
			
			div
			{
				position:absolute;
				left:50%;
				top:50%;
				transform:translate(-50%,-50%);
				padding:50px;
			}
			
			body
			{
				background-image:url("autoback.jpg");
			}
			
			input::placeholder
			{
				font-size:15px;
				color:red;
			}
			
			input[type='text']:hover,input[type='password']:hover
			{
				transition:1s;
				height:50px;
				width:330px;
				border:2px solid #ffff00;
			}
			
			input[type='text'],input[type='password']
			{
				color:white;
				font-size:20px;
				margin:5px;
				height:40px;
				width:300px;
				border-radius:10px;
				background-color:transparent;
				outline:none;
				border:2px solid white;
			}
			
			input[type='submit']:hover
			{
				color:red;
			}
			
			input[type='submit']
			{
				background-color:transparent;
				margin-left:100px;
				margin-top:30px;
				height:40px;
				width:100px;
				border-radius:10px;
				color:white;
				font-size:15px;
				cursor:pointer;
				outline:none;
			}
			
			
			.forgetpass
			{
				font-size:18px;
				margin-left:210px;
			}
			
			p
			{
				color:#ffff00;
				font-size:20px;
				margin-left:50px;
			}
			
			b
			{
				font-size:70px;
				color:yellow	;
			}
			
			.text
			{
				margin-left:42px;
			}
			
			a
			{
				color:white;
			}
		</style>
	</head>
	
	<body>		
		<div>
			<table>
				</th><b class='text'>LOGIN</b></th>
				</tr>
				<br>
				<br>
				<br>
				<tr>
					<td><input type='text' placeholder='Enter id or number'></td>
				</tr>
				<tr>
					<td><input type='password' placeholder='Enter password'></td>
				</tr>
				<tr>
					<td><a href='forgetpass.php' class='forgetpass'>Forget password</a></td>
				</tr>
				<tr>
					<td><input type='submit' value='Login'></td>
				</tr>
				<tr>
					<td><p>Don't have an account?
					<a href='signup.php' class='new-account'>Signup..</a></p></td>
				</tr>
			</table>
		</div>
	</body>
</html>