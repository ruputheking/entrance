<!DOCTYPE html>
<html>
<title>Admit Card </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/w3.css">
<link rel="stylesheet" href="/backend/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">
<style media="screen">
  button{
    padding: 10px 20px;
    width: 200px;
    border-radius: 5px;
    position: absolute;
    top: 10px;
    left: 10px;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/printThis.js"></script>
<body>
  <button type="button" onclick="print();" name="button" class="btn btn-danger btn-xl">Print</button>
<div class="w3-container admit-box margin" id="selector">
  <div class="w3-card-6" style="border:1px solid #ccc;">
    <header class="w3-container w3-blue" style="text-align:center;">
      <h1>Pandora Secondary School</h1>
    </header>
    <div class="admit">
      <div class="w3-container left">
        <span class="admit-card">Admit Card</span>
        <span class="admit-card-detail">
          <p>Name: {{ $serial->name }}</p>
          <p>Faculty: {{ $serial->faculty->name }}</p>
          <p>Email: {{ $serial->email }}</p>
          <p>Phone: {{ $serial->phone }}</p>
          <p>Date of Birth: {{ $serial->dob }}</p>
          <p>Gender: {{ $serial->gender }}</p>
          <p>Address: {{ $serial->address }}</p>
        </span>
      </div>
      <div class="image-box">
        <img src="{{ $serial->image_url }}" alt="">
      </div>
    </div>
    <footer class="w3-container w3-blue clearfix">
      <div class="pull-right">
        <h5 class="serial">Date of Entrance : {{$entranceDate->date}} @if(!$entranceDate->date) {{ 'null' }} @endif</h5>
      </div>
      <div class="pull-left">
        <h5 class="serial">Serial No : {{ $serial->serial }}</h5>
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript">
    function print() {
      $("#selector").printThis({
            debug: false,               // show the iframe for debugging
            importCSS: true,            // import parent page css
            importStyle: true,         // import style tags
            printContainer: true,       // print outer container/$.selector
            loadCSS: ["css/style.css", "css/w3.css", "backend/css/bootstrap.min.css"],                // path to additional css file - use an array [] for multiple
            pageTitle: "Pandora Secondary School",              // add title to print page
            removeInline: false,        // remove inline styles from print elements
            removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
            printDelay: 333,            // variable print delay
            header: null,               // prefix to html
            footer: null,               // postfix to html
            base: false,                // preserve the BASE tag or accept a string for the URL
            formValues: true,           // preserve input/form values
            canvas: false,              // copy canvas content
            doctypeString: '',       // enter a different doctype for older markup
            removeScripts: false,       // remove script tags from print content
            copyTagClasses: false,      // copy classes from the html & body tag
            beforePrintEvent: null,     // function for printEvent in iframe
            beforePrint: null,          // function called before iframe is filled
            afterPrint: null            // function called before iframe is removed
          });
    }
  </script>
</body>
</html>
