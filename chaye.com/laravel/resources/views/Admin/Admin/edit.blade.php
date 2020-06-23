@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>编辑网站管理员</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="/chaye.com/laravel/public/admin/admin" class="actionBtn">管理员列表</a>编辑管理员</h3>
    <form action="{{url('admin/admin/update',$manage->id)}}" method="post">
    {{csrf_field()}}
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">账号</td>
       <td>
        <input type="text" name="name" value="{{$manage->name}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">密码</td>
       <td>
        <input type="password" name="password" value="" size="50" class="inpMain" /><span>如果不需要改密码则不要填写</span>
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="date" value="<?php echo(date("Y-m-d H:i:s",time()))?>">
        <input name="submit" class="btn" type="submit" value="提交" />
       </td>
      </tr>
     </table>
    </form>
       </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
</body>
</html>