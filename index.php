<!DOCTYPE html>
<html>
<head>
<style>
    body{
    background:lightblue;

}
.container{
    max-width:360px;
    margin:auto;
    border-radius: 5px;
    background:#96bb72;
    padding:20px;
    
}
input[type=text],select{
    width:100%;
    padding:10px 10px;
    margin:8px 0;
    display:inline-block;
    border:1px solid #ccc;
    border-radius:4px;
    bpx-sizing:border-box;
}
    </style>
</head>
<body>
<div class="container">
<form>
<lable for="name">First Name</lable>
<input type="text" name="fullname" placeholder="first name">
<lable for="name">Last Name</lable>
<input type="text" name="fullname" placeholder="last name">
<lable for="email">Email</lable>
<input type="text" name="fullname" placeholder="your email">
<lable for="role">Role</lable>
<select id="role">
<option>
cse
</option>
<option>
marketing
</option>
<option>
sales manager
</option>
</select>
<input type="submit" value="submit">
</form>
</body>
</html>