function xacnhanxoa(a)
{
	if(confirm("Bạn có muốn xóa không ?"))
	{
		document.getElementById("xoa_"+a).click();
	}
}

document.getElementById("chonall").onclick =  function()
{
	var a = document.getElementById("solist").value;
		for(var i=0;i<a;i++)
		{
			if(!document.getElementById("chon"+i).checked)
			{document.getElementById("chon"+i).click();}
		}
}		

document.getElementById("xacnhanxoaall").onclick =  function()
	{
		if(confirm("Bạn có muốn xóa không ?"))
		{
			document.getElementById("xoaall").click();
		}
		}