
<html>
	<head>
		<title>signup</title>
		<style>
			body
			{
				background-image:url("signup2.jpg");
				position:absolute;
				top:50%;
				left:50%;
				transform:translate(-50%,-50%);
				padding:50px;
				color:white;
			}
			
			input[type='submit']
			{
				height:40px;
				width:130px;
				background:black;
				color:white;
				font-size:19px;
			}
			
			input[type='submit']:hover
			{
				background:white;
				color:black;
			}
			
			input[type='radio'],select,input[type='submit']
			{
				cursor:pointer;
			}
			
			input
			{
				border-radius:10px;
				margin:15px;
				outline:none;
				border:3px solid white;
			}
			
			input[type='text'],input[type='password']
			{
				font-size:20px;
				color:white;
				background:transparent;
				border-color:white;
				height:30px;
				width:200px;
			}
			
			input[type='text']:hover,input[type='password']:hover
			{
				transition:1s;
				height:33px;
				width:250px;
				border-color:red;
			}
			select
			{
				height:30px;
				outline:none;
				margin:10px;
			}
			
			b
			{
				font-size:22px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<table>
				<tr>
					<th><b>Enter First Name : </b></th>
					<td><input type='text'></td>
				</tr>
				<tr>
					<th><b>Enter Last Name : </b></th>
					<td><input type='text'></td>
				</tr>
				<tr>
					<th><b>Enter Password : </b></th>
					<td><input type='password'></td>
				</tr>
				<tr>
					<th><b>ReEnter Password : </b></th>
					<td><input type='password'></td>
				</tr>
				<tr>
				<th><b>Birth date : </b></th>
				<td>
				<select>
					<option>DAY</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>				
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>				
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>				
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select>	
				<select>
					<option>MONTH</option>
					<option>JANUARY</option>
					<option>FEBRUARY</option>
					<option>MARCH</option>
					<option>APRIL</option>
					<option>MAY</option>
					<option>JUNE</option>
					<option>JULY</option>
					<option>AUGUST</option>
					<option>SEPTMBER</option>
					<option>OCTOBER</option>
					<option>NOVEMBER</option>
					<option>DECEMBER</option>
				</select>
				<select>
					<option>YEAR</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
					<option>2004</option>
					<option>2005</option>				
					<option>2006</option>
					<option>2007</option>
					<option>2008</option>
					<option>2009</option>
					<option>2010</option>
					<option>2011</option>
				</select>
				</td>
				
				<tr>
					<th><b>Gender : </b></th>
					<td><input type='radio' name='g' checked>MALE
					<input type='radio' name='g'>FEMALE</td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type='submit' value='Submit'></td>
				</tr>
			</table>		
			
		</div>
	</body>
</html>