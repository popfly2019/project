@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>友情链接</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/chaye.com/laravel/public/admin/link/add" class="actionBtn">添加友情链接</a>友情链接列表</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <th align="center">
        <input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check' >
       </th>
       <th align="center">名称</th>
       <th align="center">链接</th>
       <th align="center">操作</th>
      </tr>
      @foreach($list as $vo)
      <tr>
       <td align="center"><input type=checkbox name=tables[]></td>
       <td align="center">{{$vo->name}}</td>
       <td align="center"><a href="{{$vo->url}}" target="_blank">{{$vo->url}}</a></td>
       <td align="center"><a href="{{url('admin/link/edit',$vo->id)}}">编辑</a> | <a href="{{url('admin/link/forceDelete',$vo->id)}}">删除</a></td>
      </tr>
      @endforeach
    </table>
   {{$list->links()}}
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
<div class="clear"></div> </div>
</body>
</html>