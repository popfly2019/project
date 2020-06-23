@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>常用配置</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3>常用配置列表</h3>
    <form action="/chaye.com/laravel/public/admin/config/store" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      @foreach($data as $vo)
      <tr>
       <td width="90" align="right">{{$vo->name2}}</td>
       <td>
        <input type="text" name="{{$vo->name}}" value="{{$vo->value}}" size="80" class="inpMain" />
       </td>
      </tr>
      @endforeach
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