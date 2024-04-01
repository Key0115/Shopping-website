$(document).ready(initialisePage);

function initialisePage()
{
  $("div#searchName input").keyup(handleNiceAutoComplete);
}

//JSON AJAX CODE//
function handleNiceAutoComplete()
{
  var search = $("div#searchName input").val().trim();
  if (search != "")
  {
    $.get("../controller/getCheeseServices.php?cheeseName="+search,niceAutoCompleteCallback);
  }
  else // if search IS empty
  {
    $("div#searchName div.results").hide();
  }
}

function niceAutoCompleteCallback(results)
{
    // contrast the ugly version!
    // note how we don't need to do any parsing - results will already
    // be an array!
    console.log(results);
    // build the results div
    $("div#searchName div.results").empty();
    for (var i = 0; i < results.length; i++)
    {
      var result = $('<div class="result">'+results[i]+'</div>');
      result.click(function(){
        $("div#searchName div.results").hide();
        $("input[name=searchname]").val($(this).text());
        $("form").get(0).submit();
      });
      $("div#searchName div.results").append(result);
    }
    if (results.length == 0)
    {
      $("div#searchName div.results").hide();
    }
    else {
      $("div#searchName div.results").show();
    }
}