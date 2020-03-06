
function ktrong()
{

	for(var i=0;i<id_name.length;i++)
	{
		if(document.getElementById(id_name[i]).value=="")
		{
			reg_error[id_reg]="Không được để trống các cột";
			id_reg++;
			return;
		}
	}
	
}
function phone()
{
	var sdt = document.getElementById("phone").value;
	if(sdt=="")
	{
		return;
	}
	if(!/^(\+84|0)\d{9}$/.exec(sdt))
	{
		reg_error[id_reg]="Hảy nhập đúng số điện thoại";
		id_reg++;
		return;
	}
}
function ktemail()
{
	var email = document.getElementById('email').value;
	if(email=="")
	{
		return;
	}
	if(!/^\w+[a-zA-Z0-9\.\_]+\w+\@\w+[a-zA-Z0-9\.\_]+\w+$/.exec(email))
	{
		reg_error[id_reg]="email không hợp lệ";
		id_reg++;
	}
}
function ktkey()
{
 	var regex=/(^|\s)+(select|insert|delete|drop|set)+($|\s)/i;
	for(var i=0;i<id_name.length;i++)
	{
		
			if(regex.exec(document.getElementById(id_name[i]).value))
		{
			reg_error[id_reg]="Không được nhập các từ delete,drop,...";
			id_reg++;
			return;
		
		}
	}
}
function delete_error()
{
	for(var i=0;i<reg_error.length;i++)
	{
		reg_error.pop();
	}
}
function ktrule()
{
	if(document.getElementById("rule").checked==false)
	{
		reg_error[id_reg]="Bạn phải chấp nhận các điều khoảng";
		id_reg++;
	}
}

var reg_error=[];
var id_reg;
var id_name=['name','passwork','phone','email','address'];
function kiemtra()
{
	delete_error();
	id_reg=0;
	ktrule();
	ktkey();
	ktemail();
	phone();
	ktrong();
	if(id_reg>0)
	{
		document.getElementById("error").innerHTML = reg_error.join("<br>");
	}
	else
	{
		document.getElementById("reg").click();
	}
	//alert(reg_error[0]);
	//alert(id_reg);
}