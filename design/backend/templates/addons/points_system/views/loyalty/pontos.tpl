<form method="post" action="admin.php?dispatch=loyalty.manage" class="text-center" style="width:100%; padding-top:1%;">
    <br><label for="quantityPoints"><b>POINTS</b></label>
    <input type="text" id="quantityPoints" name="quantityPoints"><br>
    <input type="hidden" id="idescondido" name="idescondido" value="{$smarty.get.id_user}"><br>
    <input type="submit" value="Submit">
  </form>