@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>编辑友情链接</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/chaye.com/laravel/public/admin/link/update',$manage->id)}}" class="actionBtn">友情链接列表</a>编辑友情链接</h3>
    <form action="{{url('admin/link/update',$manage->id)}}" method="post">
    {{csrf_field()}}
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">网址名称</td>
       <td>
        <input type="text" name="name" value="{{$manage->name}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">网址</td>
       <td>
        <input type="text" name="url" value="{{$manage->url}}" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
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