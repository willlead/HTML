/* $기호는 j쿼리를 사용하겠다는것이다. window는 android의 activity랑 동일하다.
 * on() 이벤트를 연결하겠다.
 * 문자열은 ""나 ''나 둘다 가능하다.
 * function은 매서드를 만들겠다
 * function 메서드명() 선언적 메서드
 * function () 익명 메서드: 동작을???
 *   알드라이브 
 */
$(window).on('orientationchange', function kbs() {
	var output = '<h1> 폰의 현재 방향';
	switch(window.orientation){
		case 0: 
			output += '<h2> 폰을 수직으로 세우셧군요';
			break;
		case -90:
			output += '<h2> 폰을 오른쪽으로 돌려서 수평이 되셨군요';
			break;
		case 90:
			output += '<h2> 폰을 왼쪽으로 돌려서 수평이 되셨군요';
			break;		
	}
	// html()는 문자관련 메서드
	// body안에 output 텍스트를 집어넣는다.
	$('body').html(output);
});
