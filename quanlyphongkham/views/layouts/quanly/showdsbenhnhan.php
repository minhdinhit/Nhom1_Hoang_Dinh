

<table width="100%">
	<tr>
		<td class="py-3"><small>Stt</small></td>
		<td class="py-3">
			<small>Name</small>
		</td>
		<td class="py-3">
			<small>Sex</small>
		</td>
		<td class="py-3">
			<small>Ngày sinh</small>
		</td>
		<td class="py-3">
			<small>SDT</small>
		</td>
		<td>
			<small>CMND</small>
		</td>
		<td class="py-3"></td>
	</tr>

	<?php 

	if($allbenhnhan!=0)
	{
		$i = ($page-1)*$count;
		foreach ($allbenhnhan as $value) {
			echo '<tr style="background-color:#fff" class="border-bottom border-light">';
			echo '<td class="px-2 py-2">'.++$i.'</td>';
			echo '<td class="px-2 py-2">'.$value['name'].'</td>';
			if($value['sex']==1)
			{
				echo '<td class="px-2 py-2">Nam</td>';
			}else
			{
				echo '<td class="px-2 py-2">Nử</td>';
			}
			echo '<td class="px-2 py-2">'.$value['birthday'].'</td>';
			echo '<td class="px-2 py-2">'.$value['phone'].'</td>';
			echo '<td class="px-2 py-2">'.$value['cmnd'].'</td>';
			echo '<td class="px-2 py-2">
			<a href="chinhsuabenhnhan/'.$value['id'].'"><button style="width:40px;height: 40px;border-radius:50%" class="bg-warning text-light border-0 shadow"><i class="far fa-edit"></i></button></a>
			<a href="xoabenhnhan/'.$value['id'].'"><button style="width:40px;height: 40px;border-radius:50%" class="bg-danger text-light border-0 shadow"><i class="far fa-trash-alt"></i></button>
			</td>';
			echo '</tr>';
		}
	}

?>
	
</table>
<p class=" py-3 px-4">
<?php 

if($countallbenhnhan>$count)
{
	$trang = ceil($countallbenhnhan/$count);
	for($i=1;$i<=$trang; $i++)
	{
		if($i==$page)
		{
			echo '<span class="bg-info btn px-2 text-light">'.$i.'</span>';
		}else
		{
			echo '<span class="bg-light btn px-2"><a href="?page='.$i.'&name='.$name.'">'.$i.'</a></span>';
		}
	}

}

?>
</p>