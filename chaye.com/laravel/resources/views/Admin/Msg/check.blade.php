@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>查看留言信息</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="/chaye.com/laravel/public/admin/msg" class="actionBtn">留言信息表</a>查看留言信息</h3>
    <form action="{{url('admin/admin/update',$manage->id)}}" method="post">
    {{csrf_field()}}
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">标题</td>
       <td>
        <input type="text" name="title" value="{{$manage->title}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td width="90" align="right">姓名</td>
       <td>
        <input type="text" name="name" value="{{$manage->name}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td width="90" align="right">电话</td>
       <td>
        <input type="text" name="phone" value="{{$manage->phone}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td width="90" align="right">邮箱</td>
       <td>
        <input type="text" name="email" value="{{$manage->email}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td width="90" align="right">地址</td>
       <td>
        <input type="text" name="address" value="{{$manage->address}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td width="90" align="right">留言内容</td>
       <td>
          <textarea name="content" id="" cols="83" rows="8">{{$manage->content}}</textarea>
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