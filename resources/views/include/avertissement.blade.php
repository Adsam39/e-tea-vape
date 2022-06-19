<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
swal({
	    title: "En entrant sur ce site, je reconnais être majeur(e) et que je suis autorisé(e) par la législation de mon pays à acheter des produits contenant de la nicotine.",
	    //text: "Once deleted, you will not be able to recover this record!",
	    icon: "warning",
	    buttons: true,
        /*cancelButtonText: "Quitter le site",
        confirmButtonText: "Entrer sur le site",
	    dangerMode: true,*/
	})
	.then((willDelete) => {
	    if (willDelete) {
	        swal("Bonne visite sur E-TEA VAPE", {
	            icon: "success",
	        });
	    } else {
	        swal("Désolé de ne pas avoir répondu à vos attentes");
			swal(history.go(-1));
	    }
});
</script>