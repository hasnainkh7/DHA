<!DOCTYPE html><html lang="en"><head>

    <meta charset="UTF-8">
    
  <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
  <meta name="apple-mobile-web-app-title" content="CodePen">
  
  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  
  <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
  
  
    <title>CodePen - Table with Sticky Header and Sticky First Column</title>
    
    
    
    
  <style>
  @import url("https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,700;1,200&display=swap");
  
  table {
    font-family: "Fraunces", serif;
    font-size: 125%;
    white-space: nowrap;
    margin: 0;
    border: none;
    border-collapse: separate;
    border-spacing: 0;
    table-layout: fixed;
    border: 1px solid black;
  }
  table td,
  table th {
    border: 1px solid black;
    padding: 0.5rem 1rem;
  }
  table thead th {
    padding: 3px;
    position: sticky;
    top: 0;
    z-index: 1;
    width: 25vw;
    background: white;
  }
  table td {
    background: #fff;
    padding: 4px 5px;
    text-align: center;
  }
  
  table tbody th {
    font-weight: 100;
    font-style: italic;
    text-align: left;
    position: relative;
  }
  table thead th:first-child {
    position: sticky;
    left: 0;
    z-index: 2;
  }
  table tbody th {
    position: sticky;
    left: 0;
    background: white;
    z-index: 1;
  }
  caption {
    text-align: left;
    padding: 0.25rem;
    position: sticky;
    left: 0;
  }
  
  [role="region"][aria-labelledby][tabindex] {
    width: 100%;
    max-height: 98vh;
    overflow: auto;
  }
  [role="region"][aria-labelledby][tabindex]:focus {
    box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.5);
    outline: 0;
  }
  </style>
  
    
    
    
    <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>
  
  
  </head>
  
  <body translate="no">
    <div role="region" aria-labelledby="caption" tabindex="0">
    <table>
      <caption id="caption">Baseball numbers mmkay.</caption>
      <thead>
        <tr>
          <th>Teams</th>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
          <th>5</th>
          <th>6</th>
          <th>7</th>
          <th>8</th>
          <th>9</th>
          <th>Runs</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Milwaukee Brewers</th>
          <td>2</td>
          <td>3</td>
          <td>4</td>
          <td>4</td>
          <td>1</td>
          <td>0</td>
          <td>1</td>
          <td>0</td>
          <td>1</td>
          <td>16</td>
        </tr>
        <tr>
          <th>Los Angles Dodgers</th>
          <td>1</td>
          <td>3</td>
          <td>3</td>
          <td>1</td>
          <td>0</td>
          <td>0</td>
          <td>1</td>
          <td>0</td>
          <td>4</td>
          <td>13</td>
        </tr>
        <tr>
          <th>New York Mets</th>
          <td>0</td>
          <td>2</td>
          <td>4</td>
          <td>4</td>
          <td>4</td>
          <td>1</td>
          <td>0</td>
          <td>3</td>
          <td>4</td>
          <td>22</td>
        </tr>
        <tr>
          <th>St. Louis Cardinals</th>
          <td>1</td>
          <td>1</td>
          <td>0</td>
          <td>2</td>
          <td>4</td>
          <td>2</td>
          <td>2</td>
          <td>4</td>
          <td>2</td>
          <td>18</td>
        </tr>
        <tr>
          <th>Houston Astros</th>
          <td>1</td>
          <td>4</td>
          <td>1</td>
          <td>4</td>
          <td>0</td>
          <td>4</td>
          <td>1</td>
          <td>3</td>
          <td>3</td>
          <td>21</td>
        </tr>
        <tr>
          <th>Toronto Blue Jays</th>
          <td>0</td>
          <td>2</td>
          <td>3</td>
          <td>1</td>
          <td>4</td>
          <td>0</td>
          <td>3</td>
          <td>4</td>
          <td>2</td>
          <td>19</td>
        </tr>
        <tr>
          <th>Boston Red Sox</th>
          <td>2</td>
          <td>3</td>
          <td>1</td>
          <td>3</td>
          <td>2</td>
          <td>2</td>
          <td>0</td>
          <td>1</td>
          <td>3</td>
          <td>17</td>
        </tr>
        <tr>
          <th>Chicago Cubs</th>
          <td>1</td>
          <td>4</td>
          <td>3</td>
          <td>0</td>
          <td>4</td>
          <td>3</td>
          <td>0</td>
          <td>2</td>
          <td>2</td>
          <td>19</td>
        </tr>
        <tr>
          <th>Philadelphia Phillies</th>
          <td>0</td>
          <td>0</td>
          <td>4</td>
          <td>0</td>
          <td>3</td>
          <td>3</td>
          <td>1</td>
          <td>3</td>
          <td>4</td>
          <td>18</td>
        </tr>
        <tr>
          <th>Chicago White Sox</th>
          <td>0</td>
          <td>0</td>
          <td>3</td>
          <td>3</td>
          <td>4</td>
          <td>1</td>
          <td>1</td>
          <td>3</td>
          <td>3</td>
          <td>18</td>
        </tr>
        <tr>
          <th>San Diego Padres</th>
          <td>2</td>
          <td>3</td>
          <td>1</td>
          <td>4</td>
          <td>4</td>
          <td>0</td>
          <td>0</td>
          <td>4</td>
          <td>0</td>
          <td>18</td>
        </tr>
        <tr>
          <th>Cleveland Indians</th>
          <td>0</td>
          <td>4</td>
          <td>3</td>
          <td>4</td>
          <td>3</td>
          <td>0</td>
          <td>2</td>
          <td>0</td>
          <td>1</td>
          <td>17</td>
        </tr>
        <tr>
          <th>San Francisco Giants</th>
          <td>2</td>
          <td>2</td>
          <td>4</td>
          <td>3</td>
          <td>4</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
          <td>4</td>
          <td>28</td>
        </tr>
        <tr>
          <th>Cincinatti Reds</th>
          <td>3</td>
          <td>1</td>
          <td>0</td>
          <td>1</td>
          <td>0</td>
          <td>1</td>
          <td>1</td>
          <td>2</td>
          <td>1</td>
          <td>10</td>
        </tr>
        <tr>
          <th>Minnesota Twins</th>
          <td>2</td>
          <td>3</td>
          <td>1</td>
          <td>4</td>
          <td>1</td>
          <td>0</td>
          <td>2</td>
          <td>1</td>
          <td>1</td>
          <td>15</td>
        </tr>
        <tr>
          <th>Tampa Bay Rays</th>
          <td>3</td>
          <td>2</td>
          <td>4</td>
          <td>4</td>
          <td>3</td>
          <td>2</td>
          <td>1</td>
          <td>1</td>
          <td>4</td>
          <td>24</td>
        </tr>
        <tr>
          <th>Miami Marlins</th>
          <td>0</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>2</td>
          <td>4</td>
          <td>4</td>
          <td>1</td>
          <td>2</td>
          <td>16</td>
        </tr>
        <tr>
          <th>Oakland Athletics</th>
          <td>2</td>
          <td>3</td>
          <td>0</td>
          <td>1</td>
          <td>1</td>
          <td>3</td>
          <td>3</td>
          <td>2</td>
          <td>3</td>
          <td>18</td>
        </tr>
        <tr>
          <th>Detroit Tigers</th>
          <td>4</td>
          <td>0</td>
          <td>4</td>
          <td>2</td>
          <td>4</td>
          <td>3</td>
          <td>3</td>
          <td>1</td>
          <td>4</td>
          <td>25</td>
        </tr>
        <tr>
          <th>Pittsburgh Pirates</th>
          <td>4</td>
          <td>3</td>
          <td>1</td>
          <td>0</td>
          <td>4</td>
          <td>0</td>
          <td>2</td>
          <td>0</td>
          <td>2</td>
          <td>16</td>
        </tr>
        <tr>
          <th>Seattle Mariners</th>
          <td>1</td>
          <td>3</td>
          <td>4</td>
          <td>4</td>
          <td>4</td>
          <td>2</td>
          <td>0</td>
          <td>0</td>
          <td>3</td>
          <td>21</td>
        </tr>
        <tr>
          <th>Atlanta Braves</th>
          <td>2</td>
          <td>3</td>
          <td>0</td>
          <td>0</td>
          <td>3</td>
          <td>4</td>
          <td>3</td>
          <td>4</td>
          <td>1</td>
          <td>20</td>
        </tr>
      </tbody>
    </table>
  </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
    
    
  
    <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>
  
  
  
   
  </body></html>