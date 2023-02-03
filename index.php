<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Word Counter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
  </head>
  <body>
    <div class="container">
    
    <div class="has-text-centered my-5">
      <h1 class="title">Word Counter</h1>
      <h2 class="subtitle">Count Your Words & Characters</h2>
    </div>


      <div class="box">
      <div class="field">
        <label class="label">Enter Text:</label>
        <div class="control">
          <textarea class="textarea" id="text"></textarea>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <div class="field">
            <div class="control">
              <button class="button is-link" id="count">Count</button>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="field">
            <label class="label">Words:</label>
            <div class="control">
              <input class="input" type="text" id="word_count" disabled>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="field">
            <label class="label">Characters:</label>
            <div class="control">
              <input class="input" type="text" id="char_count" disabled>
            </div>
          </div>
        </div>
      </div>
      </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#count").click(function(){
          var text = $("#text").val();
          $.post("word_count.php", {text: text}, function(data){
            var result = JSON.parse(data);
            $("#word_count").val(result.word_count);
            $("#char_count").val(result.char_count);
          });
        });
      });
    </script>
  </body>
</html>
