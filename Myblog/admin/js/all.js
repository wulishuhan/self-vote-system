function selectAll()  //选中所有
{
    node=window.document.frm.itm;
    for(i=0;i<node.length;i++)
    {
      node[i].checked=true;
      
    }
    
}
function cancelAll() //取消选中所有
{
    node=frm.itm;
    for(i=0;i<node.length;i++)
    {
      node[i].checked=false;
    }
}
function del() //删除选中的所有
{
    node=frm.itm;
    id="";
    for(i=0;i<node.length;i++)
    {
      if(node[i].checked)
      {
        if(id=="")
        {
          id=node[i].value
        }
        else
        {
          id=id+","+node[i].value
        }
      }
    }
    if(id=="")
    {
      alert("您没有选择删除项");
    }
    else
    {
      location.href="?type=del&id="+id
    }
}