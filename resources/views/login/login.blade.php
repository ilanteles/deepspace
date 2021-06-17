@extends('layout.site')

@section('titulo', 'Login')
<style>

    /*body,html{
        overflow: hidden;
    }*/
    
    </style>
@section('conteudo')
  
  <a href="#sun-modal"><h2>TESTE</h2></a>

  <div id="sun-modal">
    <div class="sun-modal-content">
        <span class="header">
            <h2>Sol</h2>
            <img class="img" src="/deepspace/public/icons/sun.png">
            <a href="#"><img src="/deepspace/public/icons/close.png" style="width: 20px;"></a>
            <div class="tab">
                <button class="tablinks active" onclick="planetTabs(event, 'London')">London</button>
                <button class="tablinks" onclick="planetTabs(event, 'Paris')">Paris</button>
                <button class="tablinks" onclick="planetTabs(event, 'Tokyo')">Tokyo</button>
              </div>
        </span>
    </div>
      <div id="London" class="tabcontent" style="display: block">
        <h2>TESTE 1</h2>
        <p><h2>CONTENT TESTE 1</h2></p>
      </div>
      
      <div id="Paris" class="tabcontent" style="display: none">
        <h2>TESTE 2</h2>
        <p><h2>CONTENT TESTE 2</h2></p>
      </div>
      
      <div id="Tokyo" class="tabcontent" style="display: none">
        <h2>TESTE 3</h2>
        <p><h2>CONTENT TESTE 3</h2></p>
      </div>
    </div>
    <div class="overlay"></div>
</div> 


@endsection

<script>

    function planetTabs(evt, tabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>