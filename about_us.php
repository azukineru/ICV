<?php
include('login.php');

if(isset($_SESSION['login_user'])){
	header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ICD | About Us</title>

	<link rel="stylesheet" type="text/css" href="stylesheets/normalize.min.css" />
	<link rel="stylesheet" type="text/css" href="bower_components/foundation/scss/foundation.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/custom.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/about_us.css" />
	<link rel="stylesheet" type="text/css" href="fonts/foundation-icons.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/pace.css" />
	<script type="text/javascript" src="js/pace.min.js"></script>
	<script type="text/javascript" src="js/modernizr.min.js"></script>

</head>
<body>
	<div class="large-12 header-index">
	</div>
	<div class="large-12">
		<div class="column large-2 left">
		<a href="index.php"><i class="fi-arrow-left medium"> Back</i></a>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="row large-12">
			<div class="inner">
				<h1><center>ABOUT US</center></h1>
				<br>
				<h5><center>Telkom Indonesia Witel Semarang ( North of Center Java ) business hold Semarang and its surroundings. This business area are divided into several region: Simpang Lima, Johar , Tugu , Majapahit, Banyumanik, and Candi.</center></h5>
			</div>
		</div>
		<br><br>
		<div class="row large-12">
			<div class="inner">
				<h1><center>About This Project</center></h1>
				<br>
				<h5><center>IndiHome Cluster Digitalization is an application which is built to represent the data and information of IndiHome service in Semarang area.</center></h5>
			</div>
		</div>
		<br><br>
		<div class="row large-12">
			<div class="inner">
				<h1><center>Meet the Team of This Project</center></h1>
				<div class="control">
					<button type="button" class="control" data-filter="all">All</button>
					<button type="button" class="control" data-filter=".account">Account</button>
					<button type="button" class="control" data-filter=".technology">Technology</button>
					<button type="button" class="control" data-filter=".creative">Creative</button>
					<button type="button" class="control" data-filter=".support">Content</button>
				</div>

				<div class="container">
					<div class="mix account">
						<div class="a1"></div>
						<div class="mix-text">
							<h5>Toni Agusman</h5>
							<p>Supervisor</p>
						</div>
					</div>
					<div class="mix account">
						<div class="a2"></div>
						<div class="mix-text">
							<h5>M. Rizky Pratama</h5>
							<p>Supervisor</p>
						</div>
					</div>
					<div class="mix account">
						<div class="a3"></div>
						<div class="mix-text">
							<h5>Paula Tiarma</h5>
							<p>Supervisor</p>
						</div>
					</div>
					<div class="mix technology">
						<div class="t1"></div>
						<div class="mix-text">
							<h5>Abdulloh A.</h5>
							<p>Back-End Engineer</p>
						</div>
					</div>
					<div class="mix technology">
						<div class="t2"></div>
						<div class="mix-text">
							<h5>Faishal Azka J.</h5>
							<p>Front-End Engineer</p>
						</div>
					</div>
					<div class="mix creative">
						<div class="c1"></div>
						<div class="mix-text">
							<h5>Firman Adendro</h5>
							<p>Designer</p>
						</div>
					</div>
					<div class="mix creative">
						<div class="c2"></div>
						<div class="mix-text">
							<h5>Taqiyya Najiatullah</h5>
							<p>Designer</p>
						</div>
					</div>	
					<div class="mix support">
						<div class="s1"></div>
						<div class="mix-text">
							<h5>Aifatul Vipta F.E.I.</h5>
							<p>Contributor</p>
						</div>
					</div>
					<div class="mix support">
						<div class="s2"></div>
						<div class="mix-text">
							<h5>Fauzi Rachman</h5>
							<p>Contributor</p>
						</div>
					</div>
					<div class="mix support">
						<div class="s3"></div>
						<div class="mix-text">
							<h5>Hanif Wijdan M.</h5>
							<p>Contributor</p>
						</div>
					</div>
					<div class="mix support">
						<div class="s4"></div>
						<div class="mix-text">
							<h5>Julika Givary</h5>
							<p>Contributor</p>
						</div>
					</div>
					<div class="mix support">
						<div class="s5"></div>
						<div class="mix-text">
							<h5>Nicky Yudha A.</h5>
							<p>Contributor</p>
						</div>
					</div>
					<div class="mix support">
						<div class="s6"></div>
						<div class="mix-text">
							<h5>Okky Pratama P.</h5>
							<p>Contributor</p>
						</div>
					</div>
					<div class="mix support">
						<div class="s7"></div>
						<div class="mix-text">
							<h5>Tara Damayanti</h5>
							<p>Contributor</p>
						</div>
					</div>
					<div class="mix support">
						<div class="s8"></div>
						<div class="mix-text">
							<h5>Yafis Sukma K.</h5>
							<p>Contributor</p>
						</div>
					</div>

					<div class="gap"></div>
					<div class="gap"></div>
					<div class="gap"></div>
				</div>
			</div>
		</div>
	</div>
</div>


<br><br>
<div id="footer">
	<div class="large-12 columns">
		<hr/>
		<div class="row">
			<div class="large-6 small-centered columns">
				<p>Copyright © 2017 - Telkom Indonesia | <a href="about_us.php">About Us</a> | <a href="#">Contact</a></p>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/foundation.js"></script>
<script type="text/javascript" src="js/mixitup.min.js"></script>

<script>
	$(document).foundation();
		// As we have no server-side application or routes, we will use
            // a URL "hash" for this demo, but we chould just as easily use
            // a URL route segment.

            // As we will use the target selector in several parts of the demo,
            // we will declare it as a variable here.

            var targetSelector = '.mix';

            /**
             * Reads a hash from the URL (if present), and converts it into a class
             * selector string. E.g "#green" -> ".green". Otherwise, defaults
             * to the targetSelector, equivalent to "all"
             *
             * @return {string}
             */

             function getSelectorFromHash() {
             	var hash = window.location.hash.replace(/^#/g, '');

             	var selector = hash ? '.' + hash : targetSelector;

             	return selector;
             }

            /**
             * Updates the URL whenever the current filter changes.
             *
             * @param   {mixitup.State} state
             * @return  {void}
             */

             function setHash(state) {
             	var selector = state.activeFilter.selector;
             	var newHash = '#' + selector.replace(/^./g, '');

             	if (selector === targetSelector && window.location.hash) {
                    // Equivalent to filter "all", remove the hash

                    history.pushState(null, document.title, window.location.pathname); // or history.replaceState()
                } else if (newHash !== window.location.hash && selector !== targetSelector) {
                    // Change the hash

                    history.pushState(null, document.title, window.location.pathname + newHash); // or history.replaceState()
                }
            }

            // Instantiate and configure the mixer

            var mixer = mixitup('.container', {
            	selectors: {
            		target: targetSelector
            	},
            	load: {
                    filter: getSelectorFromHash() // Ensure that the mixer's initial filter matches the URL on startup
                },
                callbacks: {
                    onMixEnd: setHash // Call the setHash() method at the end of each operation
                }
            });

            // Add an "onhashchange" handler to keep the mixer in sync as the user goes
            // back and forward through their history.

            // NB: This may or may not be the desired behavior for your project. If you don't
            // want MixItUp operations to count as individual history items, simply use
            // 'replaceState()' instead of 'pushState()' within the 'setHash()' function above.
            // In which case this handler would no longer be neccessary.

            window.onhashchange = function() {
            	var selector = getSelectorFromHash();

                if (selector === mixer.getState().activeFilter.selector) return; // no change

                mixer.filter(selector);
            };
        </script>
    </body>
    </html>
