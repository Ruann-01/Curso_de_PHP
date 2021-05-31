<?
// Defina o Label dos campos
$campos    = Array("Nome", "Endereço", "Bairro", "Cidade");
// Defina o tamanho de cada campos
$tamanho    = Array(20, 40, 20, 30);
CriaForm('Aqui vem o titulo do seu form', $campos, $tamanho);

function CriaForm($titulo, $campos, $tamanho)
{
   $total = count($campos);
   ?>
   <br>
   <form method="POST">
   <table border="1" width="449" align="center" cellpadding="4">
   <tr>
      <td colspan="2" align="center"><?=$titulo?></td>
   </tr>
   <?
   for ($i=0;$i<$total;$i++)
   {
      ?>
      <tr>
         <td align="right"><?=$campos[$i]?>: </td> <td><input name="<?=label2name($campos[$i])?>" size="<?=$tamanho[$i]?>"></td>
      </tr>
      <?
   }
   ?>
   <tr>
      <td colspan="2" align="center">
      <input type="submit"> <input type="reset">
      </td>
   </tr>
   </table>
   </form>
   <?
   Descricao();
}


function label2name($campo)
{
   $campo = strtolower($campo);
   $caracteres = Array("ç","é","ã"," ");
   $altera       = Array("c","e","a","_");
   $campo = str_replace($caracteres, $altera, $campo);
   return $campo;
}

function Descricao()
{
?>
<hr>
<h1>Formulario automático</h1>
</pre>
<p>Onde <em>ç</em> no <b>name</b> do input vira c e assim por diante de acordo com o script</p>

<h3>Sintaxe da função <em>CriaForm()</em></h3>

<ul>
   <li>Título</li>
   <li>Campos</li>
   <li>Tamanho</li>
</ul>

<code>CriaForm($titulo, $campos, $tamanho);</code>
<?
}
?>