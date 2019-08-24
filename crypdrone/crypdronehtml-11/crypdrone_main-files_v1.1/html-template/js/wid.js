function readCookie(n){return(n=new RegExp('(?:^|;\\s*)'+(''+n).replace(/[-[\]{}()*+?.,\\^$|#\s]/g,'\\$&')+'=([^;]*)').exec(document.cookie))&&n[1];}

function cccCreateCSSSelector (selector, styleRules) {
	var style = document.createElement('style');
    style.type = 'text/css';
    document.getElementsByTagName('head')[0].appendChild(style);
    if(!(style.sheet||{}).insertRule){
        (style.styleSheet || style.sheet).addRule(selector, styleRules);
    }else{
        style.sheet.insertRule(selector+"{"+styleRules+"}",0);
    }
}

function closeDropdowns() {
	var dropdowns = document.getElementsByClassName("currencyMenuBox");
	
	[].forEach.call(dropdowns, function(el) {
		el.style["display"] = 'none';
	});
}

function cccRefreshDataHeader () {
	var url = 'https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,XMR&tsyms=USD,EUR,CNY,GBP,GOLD,JPY,RUB';
	var xhr = typeof XMLHttpRequest != 'undefined' ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	
	xhr.open('get', url, true);
	xhr.onreadystatechange = function() {
		var status;
		var data;
		
		if (xhr.readyState == 4) {
			status = xhr.status;
			if (status == 200) {
				data = JSON.parse(xhr.responseText);
				
				var fsyms = 'BTC,ETH,XMR'.split(',');
				var tsyms = 'USD,EUR,CNY,GBP,GOLD,JPY,RUB'.split(',');
				
				for (var i = 0; i < fsyms.length; i++) {
					for (var k = 0; k < tsyms.length; k++) {
						var tsym = tsyms[k];
						var fsym = fsyms[i];
						var priceElm = document.getElementById('priceMultiHeader_' + fsym + '_' + tsym);
						var priceMenuElm = document.getElementById('priceMultiHeaderMenu_' + fsym + '_' + tsym);
						var changePctElm = document.getElementById('changePct_' + fsym + '_' + tsym);
						var changePctContainer = document.getElementById('changePctContainer_' + fsym + '_' + tsym);
						var changePctImg = document.getElementById('changePctImg_' + fsym + '_' + tsym);
						var Change = data.RAW[fsym][tsym].CHANGE24HOUR;

						priceElm.innerHTML = data.DISPLAY[fsym][tsym].PRICE;
						priceMenuElm.innerHTML = data.DISPLAY[fsym][tsym].PRICE;
						changePctElm.innerHTML = data.DISPLAY[fsym][tsym].CHANGEPCT24HOUR+' %';;
						
						if (Change >= 0) {
							changePctContainer.className = "priceChange priceChangeUp";
							changePctImg.src = elArrowImgUp;
						} else {
							changePctContainer.className = "priceChange priceChangeDown";
							changePctImg.src = elArrowImgDown;
						}
					}
				}
			} else {
				// pass
			}
		}
	};
	xhr.send();
}

var cccCurrentTheme = {
		General: {
			background: '#FFF',
			float: 'right',
			priceText: '#000'
		},
		Currency: {
			color: '#fabf2c'			
		},
		Trend: {
			colorUp: '#3d9400',
			colorDown: '#A11B0A'			
		},
		Menu: {
			background: 'rgb(235, 238, 240)',
			triggerBackground: '#f5f5f5',
			triggerBackgroundHover: '#fabf2c',
			linkColor: 'rgb(85, 85, 85);',
			linkHoverBackground: 'rgb(108, 156, 196)',
			linkHoverColor: '#FFF'
		}
};

if (typeof cccTheme !== 'undefined') {
	for(var key in cccCurrentTheme) {
		var group = cccCurrentTheme[key];
		for(var prop in group) {
			if(!group.hasOwnProperty(prop)) continue;
			if(cccTheme.hasOwnProperty(key) && cccTheme[key].hasOwnProperty(prop)) {
				cccCurrentTheme[key][prop] = cccTheme[key][prop];
			}
		}
	}
}

if (typeof cccThemeV2Header !== 'undefined') {
	for(var key in cccCurrentTheme) {
		var group = cccCurrentTheme[key];
		for(var prop in group) {
			if(!group.hasOwnProperty(prop)) continue;
			if(cccThemeV2Header.hasOwnProperty(key) && cccThemeV2Header[key].hasOwnProperty(prop)) {
				cccCurrentTheme[key][prop] = cccThemeV2Header[key][prop];
			}
		}
	}
}

var cccCurrentThemeV2Header = {};

for(var key in cccCurrentTheme) {
	var group = cccCurrentTheme[key];
	cccCurrentThemeV2Header[key]={};
	for(var prop in group) {
		if(!group.hasOwnProperty(prop)) continue;
		cccCurrentThemeV2Header[key][prop] = cccCurrentTheme[key][prop];
	}
}

var embedable      = document.createElement("div");
var embedableChart = document.createElement("div");
var style          = document.createElement("style");

style.innerHTML    = '@media only screen and (max-width : 991px) {  .ccc-change {    font-size: 11px;    line-height: 11px!important;  }  .ccc-price-primary {    line-height: 16px!important;    font-size: 18px;  }  .ccc-price-secondary {    font-size: 11px!important;  }  .ccc-price-link {    line-height: 21px!important;  }}';

var elArrowImgUp   = 'data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzODYuMjU3IDM4Ni4yNTciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM4Ni4yNTcgMzg2LjI1NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8cG9seWdvbiBwb2ludHM9IjE5My4xMjksOTYuODc5IDAsMjg5LjM3OSAzODYuMjU3LDI4OS4zNzkgIiBmaWxsPSIjM2Q5NDAwIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=';
var elArrowImgDown = 'data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzODYuMjU3IDM4Ni4yNTciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM4Ni4yNTcgMzg2LjI1NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8cG9seWdvbiBwb2ludHM9IjAsOTYuODc5IDE5My4xMjksMjg5LjM3OSAzODYuMjU3LDk2Ljg3OSAiIGZpbGw9IiNhMTFiMGEiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==';

embedable.className        = "ccc-widget ccc-header-v2";
embedable.style.background = cccCurrentThemeV2Header.General.background;
embedable.style.float      = "right";
embedable.style.boxSizing  = "border-box";
embedable.style.lineHeight = "1";
embedable.style.float      = cccCurrentThemeV2Header.General.float;

cccCreateCSSSelector('.ccc-header-v2 a', 'text-decoration: none;');
cccCreateCSSSelector('.ccc-header-v2 a:hover', 'text-decoration: none;');
cccCreateCSSSelector('.ccc-header-v2 a:focus', 'text-decoration: none;');
cccCreateCSSSelector('.currencyMenuContainer', 'float: left; padding: 0px 10px; position: relative;');
cccCreateCSSSelector('.currencyMenu', 'margin-top: 36px; border: none; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAcElEQVQ4je3MsQ2AIBSEYUZwBBoe7fOqixWb6SY6CiOxgTaaWIgkaKX8yXWXz5jWD7MaOgHH0k/AyWroiqAHo4CrgHMW67kIuHowFkGngwqYcuiBCZicDloE79AqLIfuq8My6DPsAn2OndHXsNYH2gAQTDcE4HWFjwAAAABJRU5ErkJggg==) ' + cccCurrentThemeV2Header.Menu.triggerBackground + '; background-repeat: no-repeat; width: 25px; height: 25px; border-radius: 15px; background-position-x: 2px; background-position-y: 4px;');
cccCreateCSSSelector('.currencyMenu:hover', 'cursor: pointer; background-color: ' + cccCurrentThemeV2Header.Menu.triggerBackgroundHover + ';');
cccCreateCSSSelector('.priceName', 'font-family: Roboto, sans-serif; color: ' + cccCurrentThemeV2Header.Currency.color + '; font-weight: 100; font-size: 20px; margin: 5px 5px 0 0; line-height: 28px;');
cccCreateCSSSelector('.priceValue', 'font-family: "Roboto", sans-serif; font-size: 24px; text-decoration: none; line-height: 34px;');
cccCreateCSSSelector('.priceValue a', 'color: ' + cccCurrentThemeV2Header.General.priceText);
cccCreateCSSSelector('.priceChange', 'font-family: "Roboto", sans-serif; font-size: 13px; line-height: 25px;');
cccCreateCSSSelector('.priceChangeDown', 'color: '+cccCurrentThemeV2Header.Trend.colorDown);
cccCreateCSSSelector('.priceChangeUp', 'color: '+cccCurrentThemeV2Header.Trend.colorUp);

cccCreateCSSSelector('.currencyMenuBox', 'background: ' + cccCurrentThemeV2Header.Menu.background + '; margin: 10px 0; font-size: 14px; display: none; position: absolute; top: 53px; width: 140px; z-index: 99;');
cccCreateCSSSelector('.currencyMenuBox .toPriceMenu', 'line-height: 34px; padding: 0 20px; color: ' + cccCurrentThemeV2Header.Menu.linkColor + ';');
cccCreateCSSSelector('.currencyMenuBox .toPriceMenu:hover', 'background: ' + cccCurrentThemeV2Header.Menu.linkHoverBackground + '; color: ' + cccCurrentThemeV2Header.Menu.linkHoverColor + '; cursor: pointer;');
cccCreateCSSSelector('.ccc-coin-container', 'margin-right: 50px; float:left');

function changeToSymbol(key) {
	priceTabContents = document.getElementsByClassName('priceTabContent');
	for (i = 0; i < priceTabContents.length; i++) {
		priceTabContents[i].style.display = 'none';
	}
	
	var priceTabContents = document.getElementsByClassName('priceTabContent' + key);
	
	for (i = 0; i < priceTabContents.length; i++) {
		priceTabContents[i].style.display = 'block';
	}
	document.cookie = 'cccHeaderV2Symbol=' + key + '; expires=Fri, 31 Dec 9999 23:59:59 GMT';
}

window.addEventListener("click", function(event){
	currencyMenuBoxes = document.getElementsByClassName('currencyMenuBox');
	for (i = 0; i < currencyMenuBoxes.length; i++) {
		currencyMenuBoxes[i].style.display = 'none';
	}
}, false);


	var fsym = 'BTC';
	var embedableCoin                  = document.createElement("div");
	embedableCoin.className            = "ccc-coin-container";
	
	var currencyMenuBTC = document.createElement("div");
	currencyMenuBTC.className = 'currencyMenuContainer';
	currencyMenuBTC.innerHTML = `<div class="currencyMenu" id="currencyMenuBTC"></div>
											<div class="currencyMenuBox" onclick="event.stopPropagation();" id="currencyMenuBoxBTC">
											
												<div class="toPriceMenu" onclick="changeToSymbol('USD'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_USD">$ 6,655.77</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('EUR'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_EUR">€ 5,713.11</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('CNY'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_CNY">¥ 46,425.1</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('GBP'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_GBP">£ 5,194.44</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('GOLD'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_GOLD">Gold g 182.75</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('JPY'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_JPY">¥ 749,561.9</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('RUB'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_RUB">₽ 441,089.2</div>
											
											</div>`;
	embedableCoin.appendChild(currencyMenuBTC);
	
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentUSD" style="display: block;">
										<div class="priceName">BTC</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/btc/overview/USD" id="priceMultiHeader_` + fsym + `_USD">$ 6,655.77</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_USD">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_USD" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_USD">1.38 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentEUR" style="display: none;">
										<div class="priceName">BTC</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/btc/overview/EUR" id="priceMultiHeader_` + fsym + `_EUR">€ 5,713.11</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_EUR">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_EUR" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_EUR">1.10 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentCNY" style="display: none;">
										<div class="priceName">BTC</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/btc/overview/CNY" id="priceMultiHeader_` + fsym + `_CNY">¥ 46,425.1</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_CNY">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_CNY" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_CNY">4.56 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentGBP" style="display: none;">
										<div class="priceName">BTC</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/btc/overview/GBP" id="priceMultiHeader_` + fsym + `_GBP">£ 5,194.44</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_GBP">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_GBP" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_GBP">1.92 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentGOLD" style="display: none;">
										<div class="priceName">BTC</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/btc/overview/GOLD" id="priceMultiHeader_` + fsym + `_GOLD">Gold g 182.75</a></div>
										<div class="priceChange priceChangeDown" id="changePctContainer_` + fsym + `_GOLD">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_GOLD" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgDown +  `" /> <span id="changePct_` + fsym + `_GOLD">-1.74 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentJPY" style="display: none;">
										<div class="priceName">BTC</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/btc/overview/JPY" id="priceMultiHeader_` + fsym + `_JPY">¥ 749,561.9</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_JPY">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_JPY" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_JPY">0.94 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentRUB" style="display: none;">
										<div class="priceName">BTC</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/btc/overview/RUB" id="priceMultiHeader_` + fsym + `_RUB">₽ 441,089.2</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_RUB">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_RUB" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_RUB">0.85 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	embedable.appendChild(embedableCoin);

	var fsym = 'ETH';
	var embedableCoin                  = document.createElement("div");
	embedableCoin.className            = "ccc-coin-container";
	
	var currencyMenuETH = document.createElement("div");
	currencyMenuETH.className = 'currencyMenuContainer';
	currencyMenuETH.innerHTML = `<div class="currencyMenu" id="currencyMenuETH"></div>
											<div class="currencyMenuBox" onclick="event.stopPropagation();" id="currencyMenuBoxETH">
											
												<div class="toPriceMenu" onclick="changeToSymbol('USD'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_USD">$ 237.43</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('EUR'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_EUR">€ 204.28</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('CNY'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_CNY">¥ 1,659.70</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('GBP'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_GBP">£ 185.70</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('GOLD'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_GOLD">Gold g 6.53</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('JPY'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_JPY">¥ 26,912.4</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('RUB'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_RUB">₽ 15,768.9</div>
											
											</div>`;
	embedableCoin.appendChild(currencyMenuETH);
	
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentUSD" style="display: block;">
										<div class="priceName">ETH</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/eth/overview/USD" id="priceMultiHeader_` + fsym + `_USD">$ 237.43</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_USD">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_USD" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_USD">3.02 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentEUR" style="display: none;">
										<div class="priceName">ETH</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/eth/overview/EUR" id="priceMultiHeader_` + fsym + `_EUR">€ 204.28</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_EUR">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_EUR" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_EUR">2.97 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentCNY" style="display: none;">
										<div class="priceName">ETH</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/ETH/overview/CNY" id="priceMultiHeader_` + fsym + `_CNY">¥ 1,659.70</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_CNY">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_CNY" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_CNY">1.68 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentGBP" style="display: none;">
										<div class="priceName">ETH</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/ETH/overview/GBP" id="priceMultiHeader_` + fsym + `_GBP">£ 185.70</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_GBP">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_GBP" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_GBP">1.68 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentGOLD" style="display: none;">
										<div class="priceName">ETH</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/ETH/overview/GOLD" id="priceMultiHeader_` + fsym + `_GOLD">Gold g 6.53</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_GOLD">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_GOLD" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_GOLD">1.68 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentJPY" style="display: none;">
										<div class="priceName">ETH</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/eth/overview/JPY" id="priceMultiHeader_` + fsym + `_JPY">¥ 26,912.4</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_JPY">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_JPY" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_JPY">2.70 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentRUB" style="display: none;">
										<div class="priceName">ETH</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/ETH/overview/RUB" id="priceMultiHeader_` + fsym + `_RUB">₽ 15,768.9</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_RUB">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_RUB" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_RUB">1.68 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	embedable.appendChild(embedableCoin);

	var fsym = 'XMR';
	var embedableCoin                  = document.createElement("div");
	embedableCoin.className            = "ccc-coin-container";
	
	var currencyMenuXMR = document.createElement("div");
	currencyMenuXMR.className = 'currencyMenuContainer';
	currencyMenuXMR.innerHTML = `<div class="currencyMenu" id="currencyMenuXMR"></div>
											<div class="currencyMenuBox" onclick="event.stopPropagation();" id="currencyMenuBoxXMR">
											
												<div class="toPriceMenu" onclick="changeToSymbol('USD'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_USD">$ 116.99</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('EUR'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_EUR">€ 100.21</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('CNY'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_CNY">¥ 814.30</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('GBP'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_GBP">£ 91.11</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('GOLD'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_GOLD">Gold g 3.21</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('JPY'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_JPY">¥ 13,147.3</div>
											
												<div class="toPriceMenu" onclick="changeToSymbol('RUB'); closeDropdowns()" id="priceMultiHeaderMenu_` + fsym + `_RUB">₽ 7,736.70</div>
											
											</div>`;
	embedableCoin.appendChild(currencyMenuXMR);
	
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentUSD" style="display: block;">
										<div class="priceName">XMR</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/xmr/overview/USD" id="priceMultiHeader_` + fsym + `_USD">$ 116.99</a></div>
										<div class="priceChange priceChangeUp" id="changePctContainer_` + fsym + `_USD">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_USD" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgUp +  `" /> <span id="changePct_` + fsym + `_USD">0.48 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentEUR" style="display: none;">
										<div class="priceName">XMR</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/XMR/overview/EUR" id="priceMultiHeader_` + fsym + `_EUR">€ 100.21</a></div>
										<div class="priceChange priceChangeDown" id="changePctContainer_` + fsym + `_EUR">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_EUR" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgDown +  `" /> <span id="changePct_` + fsym + `_EUR">-1.29 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentCNY" style="display: none;">
										<div class="priceName">XMR</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/XMR/overview/CNY" id="priceMultiHeader_` + fsym + `_CNY">¥ 814.30</a></div>
										<div class="priceChange priceChangeDown" id="changePctContainer_` + fsym + `_CNY">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_CNY" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgDown +  `" /> <span id="changePct_` + fsym + `_CNY">-1.29 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentGBP" style="display: none;">
										<div class="priceName">XMR</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/XMR/overview/GBP" id="priceMultiHeader_` + fsym + `_GBP">£ 91.11</a></div>
										<div class="priceChange priceChangeDown" id="changePctContainer_` + fsym + `_GBP">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_GBP" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgDown +  `" /> <span id="changePct_` + fsym + `_GBP">-1.29 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentGOLD" style="display: none;">
										<div class="priceName">XMR</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/XMR/overview/GOLD" id="priceMultiHeader_` + fsym + `_GOLD">Gold g 3.21</a></div>
										<div class="priceChange priceChangeDown" id="changePctContainer_` + fsym + `_GOLD">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_GOLD" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgDown +  `" /> <span id="changePct_` + fsym + `_GOLD">-1.29 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentJPY" style="display: none;">
										<div class="priceName">XMR</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/XMR/overview/JPY" id="priceMultiHeader_` + fsym + `_JPY">¥ 13,147.3</a></div>
										<div class="priceChange priceChangeDown" id="changePctContainer_` + fsym + `_JPY">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_JPY" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgDown +  `" /> <span id="changePct_` + fsym + `_JPY">-1.29 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	var priceDiv                   = document.createElement("div");
	priceDiv.className             = "ccc-price";
	priceDiv.style.float		   = 'left';
	priceDiv.innerHTML    		   = `<div class="priceTabContent priceTabContentRUB" style="display: none;">
										<div class="priceName">XMR</div>
										<div class="priceValue"  style="color: ` + cccCurrentThemeV2Header.General.priceText + `;"><a rel="nofollow" href="https://www.cryptocompare.com/coins/XMR/overview/RUB" id="priceMultiHeader_` + fsym + `_RUB">₽ 7,736.70</a></div>
										<div class="priceChange priceChangeDown" id="changePctContainer_` + fsym + `_RUB">
											<img class = "priceChangeImage" id="changePctImg_` + fsym + `_RUB" style="margin-right: 5px; vertical-align: middle;" src="` + elArrowImgDown +  `" /> <span id="changePct_` + fsym + `_RUB">-1.29 %</span>
										</div>
									</div>`;
	embedableCoin.appendChild(priceDiv);
	
	embedable.appendChild(embedableCoin);


document.currentScript.parentNode.appendChild(embedable);


var currencyMenuBtnBTC = document.getElementById('currencyMenuBTC');
currencyMenuBtnBTC.onclick = function(event){
	event.stopPropagation();

	currencyMenuBoxes = document.getElementsByClassName('currencyMenuBox');
	for (i = 0; i < currencyMenuBoxes.length; i++) {
		currencyMenuBoxes[i].style.display = 'none';
	}
	
	var target = document.getElementById('currencyMenuBoxBTC');
	target.style.display = 'block';
};

var currencyMenuBtnETH = document.getElementById('currencyMenuETH');
currencyMenuBtnETH.onclick = function(event){
	event.stopPropagation();

	currencyMenuBoxes = document.getElementsByClassName('currencyMenuBox');
	for (i = 0; i < currencyMenuBoxes.length; i++) {
		currencyMenuBoxes[i].style.display = 'none';
	}
	
	var target = document.getElementById('currencyMenuBoxETH');
	target.style.display = 'block';
};

var currencyMenuBtnXMR = document.getElementById('currencyMenuXMR');
currencyMenuBtnXMR.onclick = function(event){
	event.stopPropagation();

	currencyMenuBoxes = document.getElementsByClassName('currencyMenuBox');
	for (i = 0; i < currencyMenuBoxes.length; i++) {
		currencyMenuBoxes[i].style.display = 'none';
	}
	
	var target = document.getElementById('currencyMenuBoxXMR');
	target.style.display = 'block';
};


var cookieSymbol = readCookie('cccHeaderV2Symbol');
if (cookieSymbol !== 'null' && cookieSymbol) {
	changeToSymbol(cookieSymbol);
}

var cccHeaderRefreshDataInterval = setInterval(cccRefreshDataHeader, 15000);