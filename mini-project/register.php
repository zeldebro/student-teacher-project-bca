<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            font-family: Calibri, Helvetica, sans-serif;
            background-color: pink;
        }
        .container {
            padding: 50px;
            background-color: lightblue;
        }

        input[type=text], input[type=password], textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=text]:focus, input[type=password]:focus {
            background-color: orange;
            outline: none;
        }
        div {
            padding: 10px 0;
        }
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        .registerbtn:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
<form action="data.php" method="get">
    <div class="container">
        <center>  <h1> Student Registeration Form</h1> </center>
        <hr>
        <label> Firstname </label>
        <input type="text" name="firstname" placeholder= "Firstname" size="15" required />
        <label> Middlename: </label>
        <input type="text" name="middlename" placeholder="Middlename" size="15" required />
        <label> Lastname: </label>
        <input type="text" name="lastname" placeholder="Lastname" size="15"required />
        <label> Date Of Brith: </label>
        <input type="text" name="brithdate" placeholder="Date Of Brith" size="15"required />

            <tr>
                <td>Course: </td>
                <td><select name="Course">
                        <option value="-1" selected>select..</option>
                        <option value="BCA">BCA</option>-->
                        <option value="BBA">BBA</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="MBA">MBA</option>
                        <option value="MCA">MCA</option>
                        <option value="M.Tech">M.Tech</option>
                    </select></td>
            </tr>
        <div>
            <label>
                Gender :
            </label><br>
            <input type="radio" value="Male" name="gender" checked > Male
            <input type="radio" value="Female" name="gender"> Female
            <input type="radio" value="Other" name="gender"> Other

        </div>
        <label>
            Phone :
            <input type="text" name="Phone" placeholder="Country Code"  value="+91" size="2"/>
        </label>
        Current Address :
        <textarea cols="80" rows="5" name="Current_Address" placeholder="Current Address" value="address" required>
</textarea>
        <label>Pin Code: </label>
        <input type="text" name="pincode" placeholder="Pin Code" size="15"required />
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Re-type Password</b></label>
        <input type="password" placeholder="Retype Password" name="psw-repeat" required>
        <button type="submit" class="registerbtn">Register</button>
</form>
</body>
</html>