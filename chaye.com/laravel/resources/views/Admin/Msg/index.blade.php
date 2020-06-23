@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>留言信息</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>留言信息列表</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <th align="center">
        <input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check' >
       </th>
       <th align="center">标题</th>
       <th align="center">姓名</th>
       <th align="center">电话</th>
       <th align="center">邮箱</th>
       <th align="center">地址</th>
       <th align="center">操作</th>
      </tr>
      @foreach($list as $vo)
      <tr>
       <td align="center"><input type=checkbox name=tables[]></td>
       <td align="center">{{$vo->title}}</td>
       <td align="center">{{$vo->name}}</td>
       <td align="center">{{$vo->phone}}</td>
       <td align="center">{{$vo->email}}</td>
       <td align="center">{{$vo->address}}</td>
       <td align="center"><a href="{{url('admin/msg/check',$vo->id)}}">查看</a></td>
      </tr>
     @endforeach
    </table>
    {{$list->links()}}
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
 </div>
</div><!-- dcFooter 结束 -->
</body>
</html>