<div class="container"><br>
		<h2 class="text-center">Data Covid-19 di Indonesia</h2>
<br>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="1">No</th>
					<th>Kode Provinsi</th>
					<th>Provinsi</th>
					<th>Kasus Positif</th>
					<th>Kasus Sembuh</th>
					<th>Kasus Meninggal</th>
				</tr>
			</thead>
			<tbody id="cari">

			</tbody>
		</table>
	</div>
	<script>
		$.getJSON(
			"https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json",
			function (data) {
				var json = data.features;
				console.log(json[0].attributes.Kode_Provi);
				console.log(json.length);
				var no = 1;
				var datanya = "";
				for (var i = 0; i < json.length; i++) {
					$("#cari").append("<tr><td>" + no + "</td><td>" + json[i].attributes.Kode_Provi + "</td><td>" + json[
						i].attributes.Provinsi + "</td><td>" + json[i].attributes.Kasus_Posi + "</td><td>" + json[
						i].attributes.Kasus_Semb + "</td><td>" + json[i].attributes.Kasus_Meni);
					no++;
				}
			});
	</script>