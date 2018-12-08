// --------- Parallax move ----------- //

/*
	Выбор объектов: 
	auto - выбираются все "div" наследники от контейнера с title="Parallax_xxx_yyy", 
		которые не содержат другие "div", скорость распределяется пропорционально от минимума к максимуму,
		в порядке очерёдности положения в дереве объектов.
		xxx - минимальная скорость 0-100, yyy - максимальная 0-100, где 100 - скорость перемещения указателя мыши
	custom - ручной режим, выбираются все наследники c title="Layer_xxx" от родительского контейнера title="Parallax".
		xxx - скорость для текущего слоя
*/
var depthSetup = "custom";
var hideHorizontalScroll = true;
var mouseToContainer = false;

function cmpwParallax() {
	
	var raf = window.requestAnimationFrame
        || window.webkitRequestAnimationFrame
        || window.mozRequestAnimationFrame
        || window.msRequestAnimationFrame
        || function(cb) { 
			return window.setTimeout(cb, 1000 / 60); 
	}
	
	var _0xd6c8=["\x24\x2E\x59\x2E\x31\x34\x3D\x38\x28\x29\x7B\x24\x28\x31\x35\x29\x2E\x68\x28\x38\x28\x66\x2C\x34\x29\x7B\x33\x20\x24\x35\x3D\x24\x28\x34\x29\x3B\x62\x28\x4A\x21\x3D\x22\x4C\x22\x29\x7B\x33\x20\x36\x3D\x28\x2F\x31\x36\x5C\x64\x2B\x75\x5C\x64\x2B\x2F\x2E\x78\x28\x24\x35\x2E\x37\x28\x22\x61\x22\x29\x29\x7C\x7C\x5B\x5D\x29\x5B\x30\x5D\x3B\x62\x28\x21\x36\x29\x73\x3B\x24\x35\x2E\x37\x28\x22\x61\x22\x2C\x24\x35\x2E\x37\x28\x22\x61\x22\x29\x2E\x77\x28\x36\x2C\x22\x22\x29\x29\x3B\x33\x20\x36\x3D\x36\x2E\x56\x28\x22\x75\x22\x29\x3B\x62\x28\x76\x28\x36\x5B\x31\x5D\x29\x7C\x7C\x76\x28\x36\x5B\x32\x5D\x29\x29\x7B\x73\x7D\x33\x20\x6E\x3D\x4B\x28\x36\x5B\x31\x5D\x29\x3B\x24\x35\x2E\x37\x28\x22\x69\x2D\x31\x32\x22\x2C\x6E\x29\x3B\x33\x20\x74\x3D\x4B\x28\x36\x5B\x32\x5D\x29\x3B\x24\x35\x2E\x37\x28\x22\x69\x2D\x31\x31\x22\x2C\x74\x29\x7D\x70\x7B\x33\x20\x36\x3D\x28\x2F\x31\x30\x5C\x53\x3F\x2F\x2E\x78\x28\x24\x35\x2E\x37\x28\x22\x61\x22\x29\x29\x7C\x7C\x5B\x5D\x29\x5B\x30\x5D\x3B\x24\x35\x2E\x37\x28\x22\x61\x22\x2C\x24\x35\x2E\x37\x28\x22\x61\x22\x29\x2E\x77\x28\x36\x2C\x22\x22\x29\x29\x7D\x33\x20\x63\x3D\x5B\x5D\x3B\x62\x28\x4A\x21\x3D\x22\x4C\x22\x29\x7B\x24\x35\x2E\x42\x28\x22\x4D\x22\x29\x2E\x68\x28\x38\x28\x66\x2C\x34\x29\x7B\x62\x28\x21\x24\x28\x34\x29\x2E\x5A\x28\x22\x4D\x22\x29\x2E\x4F\x29\x7B\x63\x2E\x51\x28\x24\x28\x34\x29\x2E\x31\x39\x28\x22\x31\x37\x22\x29\x3F\x24\x28\x34\x29\x2E\x31\x63\x28\x29\x3A\x24\x28\x34\x29\x29\x7D\x7D\x29\x3B\x33\x20\x43\x3D\x28\x74\x2D\x6E\x29\x2F\x63\x2E\x4F\x3B\x33\x20\x67\x3D\x6E\x3B\x24\x28\x63\x29\x2E\x68\x28\x38\x28\x66\x2C\x34\x29\x7B\x24\x28\x34\x29\x2E\x69\x28\x22\x39\x22\x2C\x67\x29\x3B\x67\x2B\x3D\x43\x7D\x29\x7D\x70\x7B\x24\x35\x2E\x42\x28\x22\x5B\x61\x2A\x3D\x27\x44\x27\x5D\x22\x29\x2E\x68\x28\x38\x28\x66\x2C\x34\x29\x7B\x33\x20\x36\x3D\x28\x2F\x44\x5C\x64\x2B\x2F\x2E\x78\x28\x24\x28\x34\x29\x2E\x37\x28\x22\x61\x22\x29\x29\x7C\x7C\x5B\x5D\x29\x5B\x30\x5D\x3B\x62\x28\x21\x36\x29\x73\x3B\x24\x28\x34\x29\x2E\x37\x28\x22\x61\x22\x2C\x24\x28\x34\x29\x2E\x37\x28\x22\x61\x22\x29\x2E\x77\x28\x36\x2C\x22\x22\x29\x29\x3B\x33\x20\x67\x3D\x36\x2E\x56\x28\x22\x75\x22\x29\x5B\x31\x5D\x3B\x62\x28\x21\x76\x28\x67\x29\x29\x7B\x24\x28\x34\x29\x2E\x69\x28\x22\x39\x22\x2C\x67\x29\x3B\x63\x2E\x51\x28\x24\x28\x34\x29\x29\x7D\x7D\x29\x7D\x62\x28\x21\x31\x38\x29\x7B\x24\x28\x79\x29\x2E\x54\x28\x22\x48\x22\x2C\x38\x28\x65\x29\x7B\x33\x20\x6D\x3D\x24\x35\x2E\x41\x28\x29\x3B\x33\x20\x6F\x3D\x24\x35\x2E\x7A\x28\x29\x3B\x33\x20\x71\x3D\x24\x28\x79\x29\x2E\x41\x28\x29\x3B\x33\x20\x72\x3D\x24\x28\x79\x29\x2E\x7A\x28\x29\x3B\x33\x20\x6A\x3D\x28\x65\x2E\x31\x33\x2D\x71\x2F\x32\x29\x2A\x28\x6D\x2F\x71\x29\x3B\x33\x20\x6B\x3D\x28\x65\x2E\x57\x2D\x72\x2F\x32\x29\x2A\x28\x6F\x2F\x72\x29\x3B\x24\x28\x63\x29\x2E\x68\x28\x38\x28\x66\x2C\x34\x29\x7B\x33\x20\x39\x3D\x24\x28\x34\x29\x2E\x69\x28\x22\x39\x22\x29\x2F\x46\x3B\x45\x28\x38\x28\x29\x7B\x24\x28\x34\x29\x2E\x50\x28\x22\x47\x22\x2C\x22\x49\x28\x22\x2B\x6A\x2A\x39\x2B\x22\x6C\x2C\x22\x2B\x6B\x2A\x39\x2B\x22\x6C\x29\x22\x29\x7D\x29\x7D\x29\x7D\x29\x7D\x70\x7B\x24\x35\x2E\x54\x28\x22\x48\x22\x2C\x38\x28\x65\x29\x7B\x33\x20\x6D\x3D\x24\x35\x2E\x41\x28\x29\x3B\x33\x20\x6F\x3D\x24\x35\x2E\x7A\x28\x29\x3B\x33\x20\x52\x3D\x65\x2E\x58\x2D\x24\x35\x2E\x55\x28\x29\x2E\x31\x62\x3B\x33\x20\x4E\x3D\x65\x2E\x31\x64\x2D\x24\x35\x2E\x55\x28\x29\x2E\x31\x61\x3B\x33\x20\x6A\x3D\x52\x2D\x6D\x2F\x32\x3B\x33\x20\x6B\x3D\x4E\x2D\x6F\x2F\x32\x3B\x24\x28\x63\x29\x2E\x68\x28\x38\x28\x66\x2C\x34\x29\x7B\x33\x20\x39\x3D\x24\x28\x34\x29\x2E\x69\x28\x22\x39\x22\x29\x2F\x46\x3B\x45\x28\x38\x28\x29\x7B\x24\x28\x34\x29\x2E\x50\x28\x22\x47\x22\x2C\x22\x49\x28\x22\x2B\x6A\x2A\x39\x2B\x22\x6C\x2C\x22\x2B\x6B\x2A\x39\x2B\x22\x6C\x29\x22\x29\x7D\x29\x7D\x29\x7D\x29\x7D\x7D\x29\x7D","\x7C","\x73\x70\x6C\x69\x74","\x7C\x7C\x7C\x76\x61\x72\x7C\x65\x6C\x65\x6D\x7C\x6F\x54\x68\x69\x73\x7C\x74\x69\x74\x6C\x65\x50\x61\x72\x61\x6D\x73\x7C\x61\x74\x74\x72\x7C\x66\x75\x6E\x63\x74\x69\x6F\x6E\x7C\x73\x70\x65\x65\x64\x7C\x74\x69\x74\x6C\x65\x7C\x69\x66\x7C\x65\x6C\x65\x6D\x73\x7C\x7C\x7C\x69\x64\x78\x7C\x65\x6C\x65\x6D\x53\x70\x65\x65\x64\x7C\x65\x61\x63\x68\x7C\x64\x61\x74\x61\x7C\x6D\x6F\x75\x73\x65\x58\x7C\x6D\x6F\x75\x73\x65\x59\x7C\x70\x78\x7C\x63\x57\x69\x64\x74\x68\x7C\x6D\x69\x6E\x53\x70\x65\x65\x64\x7C\x63\x48\x65\x69\x67\x68\x74\x7C\x65\x6C\x73\x65\x7C\x77\x57\x69\x64\x74\x68\x7C\x77\x48\x65\x69\x67\x68\x74\x7C\x72\x65\x74\x75\x72\x6E\x7C\x6D\x61\x78\x53\x70\x65\x65\x64\x7C\x5F\x7C\x69\x73\x4E\x61\x4E\x7C\x72\x65\x70\x6C\x61\x63\x65\x7C\x65\x78\x65\x63\x7C\x77\x69\x6E\x64\x6F\x77\x7C\x68\x65\x69\x67\x68\x74\x7C\x77\x69\x64\x74\x68\x7C\x66\x69\x6E\x64\x7C\x64\x65\x6C\x74\x61\x7C\x4C\x61\x79\x65\x72\x5F\x7C\x72\x61\x66\x7C\x31\x30\x30\x7C\x74\x72\x61\x6E\x73\x66\x6F\x72\x6D\x7C\x6D\x6F\x75\x73\x65\x6D\x6F\x76\x65\x7C\x74\x72\x61\x6E\x73\x6C\x61\x74\x65\x7C\x64\x65\x70\x74\x68\x53\x65\x74\x75\x70\x7C\x70\x61\x72\x73\x65\x49\x6E\x74\x7C\x63\x75\x73\x74\x6F\x6D\x7C\x64\x69\x76\x7C\x63\x6F\x6E\x74\x61\x69\x6E\x65\x72\x59\x7C\x6C\x65\x6E\x67\x74\x68\x7C\x63\x73\x73\x7C\x70\x75\x73\x68\x7C\x63\x6F\x6E\x74\x61\x69\x6E\x65\x72\x58\x7C\x7C\x6F\x6E\x7C\x6F\x66\x66\x73\x65\x74\x7C\x73\x70\x6C\x69\x74\x7C\x63\x6C\x69\x65\x6E\x74\x59\x7C\x70\x61\x67\x65\x58\x7C\x66\x6E\x7C\x63\x68\x69\x6C\x64\x72\x65\x6E\x7C\x50\x61\x72\x61\x6C\x6C\x61\x78\x7C\x6D\x61\x78\x73\x70\x65\x65\x64\x7C\x6D\x69\x6E\x73\x70\x65\x65\x64\x7C\x63\x6C\x69\x65\x6E\x74\x58\x7C\x63\x6D\x70\x77\x50\x61\x72\x61\x6C\x6C\x61\x78\x7C\x74\x68\x69\x73\x7C\x50\x61\x72\x61\x6C\x6C\x61\x78\x5F\x7C\x66\x6C\x75\x69\x64\x5F\x68\x65\x69\x67\x68\x74\x5F\x73\x70\x61\x63\x65\x72\x7C\x6D\x6F\x75\x73\x65\x54\x6F\x43\x6F\x6E\x74\x61\x69\x6E\x65\x72\x7C\x68\x61\x73\x43\x6C\x61\x73\x73\x7C\x74\x6F\x70\x7C\x6C\x65\x66\x74\x7C\x70\x61\x72\x65\x6E\x74\x7C\x70\x61\x67\x65\x59","","\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65","\x72\x65\x70\x6C\x61\x63\x65","\x5C\x77\x2B","\x5C\x62","\x67"];eval(function(_0x1d0cx1,_0x1d0cx2,_0x1d0cx3,_0x1d0cx4,_0x1d0cx5,_0x1d0cx6){_0x1d0cx5= function(_0x1d0cx3){return (_0x1d0cx3< _0x1d0cx2?_0xd6c8[4]:_0x1d0cx5(parseInt(_0x1d0cx3/ _0x1d0cx2)))+ ((_0x1d0cx3= _0x1d0cx3% _0x1d0cx2)> 35?String[_0xd6c8[5]](_0x1d0cx3+ 29):_0x1d0cx3.toString(36))};if(!_0xd6c8[4][_0xd6c8[6]](/^/,String)){while(_0x1d0cx3--){_0x1d0cx6[_0x1d0cx5(_0x1d0cx3)]= _0x1d0cx4[_0x1d0cx3]|| _0x1d0cx5(_0x1d0cx3)};_0x1d0cx4= [function(_0x1d0cx5){return _0x1d0cx6[_0x1d0cx5]}];_0x1d0cx5= function(){return _0xd6c8[7]};_0x1d0cx3= 1};while(_0x1d0cx3--){if(_0x1d0cx4[_0x1d0cx3]){_0x1d0cx1= _0x1d0cx1[_0xd6c8[6]]( new RegExp(_0xd6c8[8]+ _0x1d0cx5(_0x1d0cx3)+ _0xd6c8[8],_0xd6c8[9]),_0x1d0cx4[_0x1d0cx3])}};return _0x1d0cx1}(_0xd6c8[0],62,76,_0xd6c8[3][_0xd6c8[2]](_0xd6c8[1]),0,{}))
	
	if (hideHorizontalScroll) $("#page").css("overflow", "hidden");
	
	$("[title*='Parallax']").cmpwParallax();
	
}

var _0x4888=["\x61\x2E\x62\x28\x27\x39\x27\x2C\x30\x28\x29\x7B\x32\x20\x31\x3D\x38\x3B\x32\x20\x33\x3D\x37\x28\x30\x28\x29\x7B\x63\x28\x5B\x22\x65\x22\x5D\x2C\x30\x28\x64\x29\x7B\x34\x28\x64\x29\x7B\x24\x3D\x64\x7D\x34\x28\x21\x31\x29\x7B\x31\x3D\x68\x3B\x66\x28\x29\x3B\x67\x28\x33\x29\x7D\x7D\x2C\x30\x28\x35\x29\x7B\x36\x2E\x6A\x28\x35\x29\x7D\x29\x7D\x2C\x69\x29\x7D\x29\x3B","\x7C","\x73\x70\x6C\x69\x74","\x66\x75\x6E\x63\x74\x69\x6F\x6E\x7C\x69\x6E\x69\x74\x52\x65\x61\x64\x79\x7C\x76\x61\x72\x7C\x69\x6E\x69\x74\x7C\x69\x66\x7C\x65\x72\x72\x7C\x63\x6F\x6E\x73\x6F\x6C\x65\x7C\x73\x65\x74\x49\x6E\x74\x65\x72\x76\x61\x6C\x7C\x66\x61\x6C\x73\x65\x7C\x6C\x6F\x61\x64\x7C\x77\x69\x6E\x64\x6F\x77\x7C\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72\x7C\x72\x65\x71\x75\x69\x72\x65\x7C\x7C\x6A\x71\x75\x65\x72\x79\x7C\x63\x6D\x70\x77\x50\x61\x72\x61\x6C\x6C\x61\x78\x7C\x63\x6C\x65\x61\x72\x49\x6E\x74\x65\x72\x76\x61\x6C\x7C\x74\x72\x75\x65\x7C\x31\x30\x30\x7C\x6C\x6F\x67","\x72\x65\x70\x6C\x61\x63\x65","","\x5C\x77\x2B","\x5C\x62","\x67"];eval(function(_0xd61ex1,_0xd61ex2,_0xd61ex3,_0xd61ex4,_0xd61ex5,_0xd61ex6){_0xd61ex5= function(_0xd61ex3){return _0xd61ex3.toString(36)};if(!_0x4888[5][_0x4888[4]](/^/,String)){while(_0xd61ex3--){_0xd61ex6[_0xd61ex3.toString(_0xd61ex2)]= _0xd61ex4[_0xd61ex3]|| _0xd61ex3.toString(_0xd61ex2)};_0xd61ex4= [function(_0xd61ex5){return _0xd61ex6[_0xd61ex5]}];_0xd61ex5= function(){return _0x4888[6]};_0xd61ex3= 1};while(_0xd61ex3--){if(_0xd61ex4[_0xd61ex3]){_0xd61ex1= _0xd61ex1[_0x4888[4]]( new RegExp(_0x4888[7]+ _0xd61ex5(_0xd61ex3)+ _0x4888[7],_0x4888[8]),_0xd61ex4[_0xd61ex3])}};return _0xd61ex1}(_0x4888[0],20,20,_0x4888[3][_0x4888[2]](_0x4888[1]),0,{}))