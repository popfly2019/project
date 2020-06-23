
<html>
<head>
<title>test</title> 
</head>
<body >
<fieldset>
<table background="images\bg_img1.jpg " width="933" height="412">
 <tr height="170">
 <td width="570px"> </td>
 <td> </td>
 </tr> 
 <tr>
<td> </td>        
<td><table>
<form method ="POST" action="/chaye.com/laravel/public/admin/login/check">
{{csrf_field()}}
 <tr>
 <td>用户名：</td>
 <td><input type="text" name="name" value="" size="20" maxlength="20" /></td>
 <td > </td>
 <td> </td>
 </tr>
 <tr>
 <td>密  码：</td>
 <td><input type="password" name="password" value="" size="20"/></td>
 <td> </td>
 <td> </td>
 </tr>
 <tr>
<!--  <td>验证码:</td>
<td><input type="text" size="" name="captcha" value=""/></td>
<td><img src="{{captcha_src()}}" onclick="this.src=this.src+'?'"> </td> -->
 </tr>
 <tr>
 </tr>
 </table>
 </td>
  <tr>
  <td> </td>   
  <td><table>
   <tr>
  <td><input type="submit" value="登录" onClick="return validateLogin()"/></td>
  <td><input type="reset" name="rs" value="重置"></td>
  </tr>
 </tr>
 </table>
 </td>
 </table>
<!--  @if (count($errors) > 0)
   <div class="alert alert-danger">
     @foreach($errors->all() as $error)
       <li>{{$error}}</li>
     @endforeach
   </div>
 @endif -->
</fieldset>
</form>
</body>
</html>