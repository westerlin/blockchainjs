<html>
  <head>
    <title>Blockchain Explainer</title>
    <script src="./sha256_sample.js" type="text/javascript" charset="UTF-8"></script>
    <script src="./blockchaindemo.js" type="text/javascript" ></script>
    <link rel="stylesheet" type="text/css" href="blockchain.css" />
  </head>
  <body onload="intro();">
    <h1 style="position:fixed;top:0px;left:0px;padding:20px;"> Blockchain Explained </h1>
    <p style="position:fixed;bottom:0px;right:0px;padding:15px;"> Slide 1 </p>
    <div style="height:100px;">
    </div>
    <div class="scroller" id="scroller" >
      <div style="display:inline-block;float:left;">
      </div>
      <div style="display:inline-block;padding:10px;" >
        <div class="block">
          <div onclick="cloneBlock();" class="newblock">
            +
          </div>
        </div>
      </div>
    </div>
    <div style="display:none;" id="copyholder" >
      <div class="floating" id="block!!block!!" >
        <div class="block">
          <center style="line-height:40px;">Block !!block!!</center>
          <div class="inside">
            <table class="tx"><tr>
              <td>previous:</td><td onclick="getPrevious(!!block!!)">
              <div id="previous" class="hashfield right" >
                0000000000000000<br/>
                0000000000000000<br/>
                0000000000000000<br/>
                0000000000000000
              </div></td> </tr><tr>
              <td>nonce:</td><td id="nonce" onclick="resetNonce(!!block!!);" class="right">0</td> </tr>
              <td>sender:</td><td><input id="sender" onkeyup="updateHash(!!block!!);" class="lineinput" type="text"/></td> </tr><tr>
              <td>receiver:</td><td><input id="receiver" class="lineinput" onkeyup="updateHash(!!block!!);" type="text"/></td> </tr><tr>
              <td>amount:</td><td><input id="amount" class="lineinput" onkeyup="updateHash(!!block!!);" type="text"/></td> </tr><tr>
            </table>
          </div>
        </div>
        <div id="hash" class="wingman hashfield"> </div>
        <input type="button" class="rounded" value="Proof-of-work" onclick="test(!!block!!);"/>
      </div>
    </div>
  </body>
</html>