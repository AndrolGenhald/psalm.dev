<html>
<head>
<title>Psalm - a static analysis tool for PHP</title>
<script src="//getpsalm.org/assets/js/fetch.js"></script>
<script src="//getpsalm.org/assets/js/codemirror.js"></script>
<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/751592/7707372/css/fonts.css" />
<meta property="og:image" content="psalm_preview.png" />
<link rel="stylesheet" href="//getpsalm.org/assets/css/site.css">
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body>
    <hgroup>
        <h1><img src="assets/images/logo.svg" alt=""> Psalm</h1>
        <h2>A static analysis tool for PHP</h2>
    </hgroup>
    <div class="cm_container_container">
        <div class="cm_container">
            <textarea
                name="code"
                id="code"
                rows="20" style="visibility: hidden; font-family: monospace; font-size: 14px; max-width: 900px; min-width: 320px;"
            >
<<?='?'?>php
function psalmCanCheck(int $your_code) : ?string {
  return $on_your . "behalf";
}

// it requires PHP 5.6+ or PHP 7.*
const AND_IT_IS = WRITTEN_IN_PLAIN_PHP;

if (rand(0, 100) > 10) {
  $a = 5;
} else {
  //$a = 2;
}

echo $a; // uncomment the line above to fix!
            </textarea>
        </div>
    </div>
    <div class="hanger">
        <a href="https://github.com/vimeo/psalm" class="github_button">View on <strong>GitHub</strong></a>
    </div>
    <div class="intro">
        <p>Life is complicated. PHP can be, too.</p>

        <p>Psalm is designed to under stand that complexity, allowing it to quickly find common programmer errors like null references and misspelled variable names.</p>

        <p>You should use Psalm if you run PHP 5.6+ or PHP 7, and you want&nbsp;to</p>

        <ul>
            <li>prevent errors in a big refactor</li>
            <li>maintain a consistent level of quality across a large team</li>
            <li>guarantee that there won’t be any type-related runtime errors</li>
        </ul>

        <p>Psalm has a number of other features that help you improve your codebase, including a fixer called Psalter that updates your code directly by leveraging Psalm’s analysis engine.</p>

        <h3>Quickstart Guide</h3>

        <p>Install via <a href="http://getcomposer.org">Composer</a> or download <a href="https://github.com/vimeo/psalm">via GitHub</a>:</p>
        <pre>
composer require --dev vimeo/psalm
        </pre>

        <p>Add a <a href="https://github.com/vimeo/psalm/blob/master/docs/configuration.md">config</a>:</p>

        <pre>
./vendor/bin/psalm --init
        </pre>

        <p>Then run Psalm:</p>
        <pre>
./vendor/bin/psalm
        </pre>
        <p>The config created above will show you all issues in your code, but will emit <code>INFO</code> issues (as opposed to <code>ERROR</code>) for certain common trivial code problems. If you want a more lenient config you can specify the level with</p>

        <pre>
./vendor/bin/psalm --init [source_dir] [level]
        </pre>

        <p>You can also <a href="https://github.com/vimeo/psalm/blob/master/docs/dealing_with_code_issues.md">learn how to suppress certain issues</a>.</p>

        <p>Want to know more? Check out the <a href="https://github.com/vimeo/psalm/blob/master/docs/index.md">docs</a>!</p>
    </div>

    <footer>
        <p>Psalm is a
        <a href="https://github.com/vimeo"><svg alt="Vimeo" class="vimeo_logo" width="100" height="40"><path d="M22.448 14.575c-.104 2.17-1.618 5.146-4.544 8.912-3.03 3.942-5.59 5.912-7.686 5.912-1.297 0-2.397-1.204-3.3-3.6-.6-2.2-1.202-4.398-1.794-6.598-.664-2.396-1.38-3.6-2.147-3.6-.166 0-.747.354-1.753 1.05l-1.048-1.35c1.1-.965 2.19-1.93 3.257-2.905 1.463-1.265 2.573-1.94 3.3-2.002 1.732-.166 2.8 1.017 3.205 3.558.435 2.74.736 4.44.902 5.115.498 2.27 1.048 3.402 1.65 3.402.466 0 1.172-.737 2.105-2.21.934-1.473 1.432-2.593 1.504-3.37.133-1.277-.365-1.91-1.506-1.91-.53 0-1.08.125-1.65.364 1.1-3.59 3.186-5.333 6.277-5.23 2.273.073 3.35 1.556 3.227 4.46m13.755 7.034c-.933 1.764-2.22 3.37-3.86 4.803-2.24 1.93-4.47 2.905-6.7 2.905-1.037.002-1.826-.33-2.376-.994-.55-.663-.81-1.535-.777-2.603.03-1.1.372-2.8 1.025-5.104.654-2.303.976-3.537.976-3.703 0-.86-.3-1.297-.902-1.297-.198 0-.77.353-1.702 1.048l-1.152-1.35c1.07-.962 2.137-1.927 3.206-2.902 1.43-1.266 2.5-1.94 3.205-2.002 1.1-.103 1.91.23 2.428.976.518.747.705 1.722.58 2.915-.435 2.034-.902 4.607-1.4 7.73-.03 1.43.488 2.146 1.556 2.146.467 0 1.297-.498 2.5-1.483.996-.82 1.815-1.598 2.45-2.324l.942 1.244m-4.357-17.8c-.03.83-.446 1.628-1.255 2.395-.9.86-1.97 1.296-3.204 1.296-1.9 0-2.822-.83-2.75-2.49.032-.86.54-1.69 1.526-2.49.985-.797 2.074-1.19 3.278-1.19.705 0 1.286.27 1.753.82.467.54.684 1.1.653 1.66m35.612 17.8c-.933 1.763-2.22 3.37-3.86 4.802-2.24 1.93-4.47 2.904-6.7 2.904-2.168.002-3.216-1.202-3.153-3.598.03-1.07.238-2.355.622-3.85.384-1.503.59-2.665.623-3.505.03-1.265-.353-1.898-1.152-1.898-.87 0-1.91 1.036-3.112 3.1-1.276 2.168-1.96 4.274-2.064 6.308-.073 1.43.072 2.54.425 3.298-2.324.064-3.963-.32-4.886-1.15-.83-.737-1.212-1.95-1.15-3.652.03-1.068.198-2.137.488-3.205.29-1.07.457-2.023.488-2.853.062-1.234-.384-1.857-1.35-1.857-.84 0-1.74.955-2.706 2.853-.966 1.9-1.505 3.89-1.61 5.956-.06 1.867.053 3.174.364 3.9-2.293.062-3.92-.415-4.876-1.452-.798-.86-1.16-2.18-1.1-3.942.032-.86.188-2.075.457-3.62.28-1.546.425-2.75.457-3.62.062-.603-.083-.903-.446-.903-.197 0-.768.34-1.702 1.015l-1.203-1.348c.168-.135 1.216-1.1 3.156-2.905 1.4-1.297 2.354-1.97 2.852-2.002.872-.073 1.567.29 2.106 1.08.53.787.8 1.69.8 2.727 0 .332-.032.654-.105.954.497-.766 1.08-1.43 1.752-2 1.537-1.34 3.26-2.086 5.157-2.252 1.64-.135 2.8.25 3.505 1.152.57.736.83 1.784.8 3.153.237-.198.486-.416.746-.654.767-.903 1.514-1.62 2.25-2.148 1.235-.902 2.52-1.4 3.86-1.504 1.597-.135 2.75.25 3.454 1.152.602.726.87 1.774.8 3.143-.032.933-.26 2.28-.675 4.065-.416 1.773-.624 2.8-.624 3.07-.03.695.03 1.182.197 1.442.166.27.57.394 1.203.394.467 0 1.297-.497 2.5-1.482.996-.82 1.816-1.598 2.45-2.324l.963 1.254m18.765-.052c-.965 1.598-2.874 3.195-5.706 4.793-3.538 2.032-7.127 3.05-10.758 3.05-2.706 0-4.636-.904-5.808-2.7-.83-1.233-1.234-2.696-1.203-4.407.03-2.698 1.234-5.27 3.6-7.71 2.603-2.665 5.674-4.003 9.21-4.003 3.27 0 5 1.328 5.208 3.994.135 1.702-.798 3.445-2.8 5.24-2.137 1.96-4.824 3.215-8.06 3.744.6.83 1.504 1.245 2.707 1.245 2.396 0 5.02-.613 7.863-1.837 2.033-.86 3.63-1.753 4.803-2.676l.945 1.265m-11.36-5.228c.032-.892-.33-1.35-1.1-1.35-.994 0-2.01.686-3.048 2.066-1.038 1.38-1.567 2.697-1.598 3.962-.02 0-.02.218 0 .643 1.63-.6 3.05-1.514 4.242-2.738.966-1.058 1.463-1.92 1.505-2.583m24.946 1.868c-.135 3.072-1.265 5.717-3.402 7.947-2.135 2.23-4.79 3.35-7.955 3.35-2.635 0-4.637-.85-6.006-2.55-.997-1.267-1.557-2.854-1.65-4.752-.166-2.863.86-5.498 3.1-7.894 2.408-2.665 5.427-3.993 9.057-3.993 2.334 0 4.098.788 5.3 2.344 1.132 1.443 1.65 3.29 1.557 5.55m-5.664-.185c.03-.903-.094-1.733-.374-2.48-.28-.747-.695-1.13-1.224-1.13-1.702 0-3.102.923-4.202 2.76-.933 1.503-1.43 3.11-1.504 4.812-.03.84.114 1.577.446 2.21.364.736.882 1.1 1.556 1.1 1.505 0 2.79-.883 3.86-2.656.892-1.472 1.38-3.008 1.44-4.615h.002z" fill="#112233"></path></svg></a>
        open source project</p>
    </footer>

<script>
var serializeJSON = function(data) {
    return Object.keys(data).map(function (keyName) {
        return encodeURIComponent(keyName) + '=' + encodeURIComponent(data[keyName])
    }).join('&');
}

var latestFetch = 0;

var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    matchBrackets: true,
    mode: "text/x-php",
    indentUnit: 2,
    gutters: ["CodeMirror-lint-markers"],
    theme: 'elegant',
    lint: {
        getAnnotations: function (code, callback, options, cm) {
            latestFetch++;
            fetchKey = latestFetch;
            fetch('//getpsalm.org/check.php', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json, application/xml, text/plain, text/html, *.*',
                    'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
                },
                body: serializeJSON({code: code})
            })
            .then(function (response) {
                return response.json();
            })
            .then(function (response) {
                if (latestFetch != fetchKey) {
                    return;
                }
                
                if ('results' in response) {
                    if (response.results.length === 0) {
                        callback([]);
                    }
                    else {
                        callback(response.results.map(function (issue) {
                            return {
                                severity: issue.severity === 'error' ? 'error' : 'warning',
                                message: issue.message,
                                from: cm.posFromIndex(issue.from),
                                to: cm.posFromIndex(issue.to)
                            };
                        }));
                    }  
                }
                else {
                    callback({
                       message: response.error.message,
                       severity: 'error',
                       from: CodeMirror.Pos(error.line - 1, start),
                       to: CodeMirror.Pos(error.line - 1, end)
                    });
                }
            })
            .catch (function (error) {
                console.log('Request failed', error);
            });
        },
        async: true,
    }
});

editor.focus();
editor.setCursor(editor.lineCount(), 0);

</script>
</body>
</html>
