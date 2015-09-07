<!-- View stored in resources/views/greeting.php -->
<html>
<head>
<title>Faces of the Elephant</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
</head>
<body id="top">
<div id="wrapper">
  <div id="header">
    <h1><a href="/home">@yield('title')</a></h1>
    <h2>by <a href="http://joshholmes.com">Josh Holmes</a> and <a href="http://blog.syntaxc4.net/">Cory Fowler</a></h2>
  </div>
  <div id="gallery">
      <ul>
@yield("gallery")
    </ul>
  </div>
</div>
<div><br /></div>
  <div id="footer">
    <p>Find the code for this sample on Github at <a href="https://github.com/joshholmes/laravelphotogallery">https://github.com/joshholmes/laravelphotogallery</a></p>
      <p>Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</body>
</html>