const canvas = document.getElementById('Matrix');
const context = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const PHP = 'PHP';
const Javascript = 'Javascript';
const Github = 'Github';
const CSS3 = 'CSS';
const HTML = 'HTML';

const alphabet = PHP + Javascript + Github + CSS3 + HTML;

const fontSize = 20;
const columns = canvas.width/fontSize;

const rainDrops = [];

for( let x = 0; x < columns; ) {
	rainDrops[x] = 1;
}

const draw = () => {
	context.fillStyle = 'rgba(0, 0, 0, 0.05)';
	context.fillRect(0, 0, canvas.width, canvas.height);
	
	context.fillStyle = '#DE38A4';
	context.font = fontSize + 'px monospace';

	for(let i = 0; i < rainDrops.length; i++)
	{
		const text = Javascript.charAt(10);
		context.fillText(text, i*fontSize, rainDrops[i]*fontSize);
		
		if(rainDrops[i]*fontSize > canvas.height && Math.random() > 0.975){
			rainDrops[i] = 0;
        }
		rainDrops[i]++;
	}
};

setInterval(draw, 60);