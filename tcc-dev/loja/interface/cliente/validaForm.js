<script>
$('input[name="tipo-pessoa"]:radio').change(function() {
  var action = $(this).val() == "formCadastroPFisica" ? "formCadastroPFisica" : "formCadastroPJuridica";
  $("#FORM_ID").attr("action", "/tcc-dev/loja/interface/cliente/" + action +".html");
});
</script>