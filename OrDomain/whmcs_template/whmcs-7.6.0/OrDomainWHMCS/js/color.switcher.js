(function() {
	"use strict";
	
	var options = {
		title: 'Main Colors:',
		filePrefix: 'color-',
		colors: [
			'#8bc34a', // #1
			'#03a9f4', // #2
			'#ff5252', // #3
			'#ff9600', // #4
			'#e91e63', // #5
			'#00bcd4', // #6
			'#fc5143', // #7
			'#00b249', // #8
			'#d48b91', // #9
			'#8cbeb2'  // #10
		]
	};
	
	window.onload = function () {
		// CSS
		var $tcsStyle = document.createElement('style'),
			styles = '';
		
		styles += '.theme-color-switcher { position: fixed; top: 50%; left: 0; -webkit-transform: translate(-100%, -50%); transform: translate(-100%, -50%); transition: transform 1.05s; z-index: 999; }';
		styles += '.theme-color-switcher.open { -webkit-transform: translate(0, -50%); transform: translate(0, -50%); }';
		styles += '.theme-color-switcher > span { display: block; position: absolute; top: 0; left: 100%; color: #fff; background-color: '+ options.colors[0] +'; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 50px; height: 50px; -webkit-transition: background-color .25s ease-in-out; transition: background-color .25s ease-in-out; cursor: pointer; z-index: 0; }';
		styles += '.theme-color-switcher > span:before { content: " "; display: block; position: absolute; top: 55%; left: 50%; width: 8px; height: 7px; margin-left: -3px; border-radius: 2px; box-shadow: inset 0 0 0 32px, 10px -10px, -10px -14px; }';
		styles += '.theme-color-switcher > span:after { content: " "; display: block; position: absolute; left: 50%; width: 2px; height: 60%; margin-top: 20%; box-shadow: inset 0 0 0 32px, 10px 0, -10px 0; }';
		styles += '.tcs-body { position: relative; padding: 20px 10px 10px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); overflow: hidden; z-index: 1; }';
		styles += '.tcs-body:before { content: "'+ options.title +'"; display: block; margin-top: -6px; padding: 0 5px 7px; color: #252525; font-family: "Arial", sans-serif; font-size: 16px; line-height: 25px; font-weight: 600; }';
		styles += '.tcs-body > span { float: left; display: block; width: 30px; height: 30px; margin: 0 5px 10px; background-color: rgba(0, 0, 0, 0.05); cursor: pointer; }';
		styles += '.tcs-body > span:nth-child(6) { clear: left; }';
		
		$tcsStyle.id = 'themeColorSwitcherStyles';
		$tcsStyle.innerHTML = styles;
		
		document.head.appendChild( $tcsStyle );
		
		
		// Markup
		var $tcs = document.createElement('div'),
			$tcsToggle = document.createElement('span'),
			$tcsBody = document.createElement('div'),
			$tcsMarkup = '';
		
		$tcs.className = 'theme-color-switcher';
		$tcsToggle.setAttribute('data-action', 'toggle');
		$tcsBody.className = 'tcs-body';
		
		for (var i = 0; i < options.colors.length; i++) {
			$tcsMarkup += '<span style="background-color: '+ options.colors[i] +';" data-action="'+ (i+1) +'"></span>';
		}
		
		$tcsBody.innerHTML = $tcsMarkup;
		$tcs.appendChild( $tcsToggle );
		$tcs.appendChild( $tcsBody );
		document.body.appendChild( $tcs );
		
		// Action
		var $tcsStyles = document.getElementById('theme_color');
		
		$tcs.addEventListener('click', function (e) {
			e.action = e.target.getAttribute('data-action');
			
			if ( e.action === 'toggle' ) {
				$tcs.classList.toggle('open');
			} else if ( e.action ) {
				var replaceName = new RegExp(options.filePrefix +'.*.css');
				
				$tcsStyles.href = $tcsStyles.href.replace(replaceName, options.filePrefix + e.action + '.css');
				
				$tcsToggle.style.backgroundColor = options.colors[e.action - 1];
			}
		});
	};
}());
