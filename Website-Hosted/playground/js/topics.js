var topics = [
	"<h3>A</h3><p>A</p>",
	"<h3>B</h3><p>B</p>",
	"<h3>C</h3><p>C</p>",
	"<h3>D</h3><p>D</p>",
	"<h3>E</h3><p>E</p>",
	"<h3>F</h3><p>F</p>",
	"<h3>G</h3><p>G</p>",
	"<h3>H</h3><p>H</p>",
	"<h3>J</h3><p>J</p>",
	"<h3>K</h3><p>K</p>",
	"<h3>L</h3><p>L</p>",
	"<h3>M</h3><p>M</p>",
	"<h3>N</h3><p>N</p>",
	"<h3>O</h3><p>O</p>",
]

var topic_index = []

for(i = 0; i < 7 ; i++) {
	num = Math.floor(Math.random()*14);
	flag = true;

	while(flag) {
		counter = 0;

		for(j = 0; j < 7; j++) {
			if(topic_index[j] == num) {
				counter++;
			}
		}

		if(counter == 0) {
			topic_index[i] = num;
			flag = false;
		} else {
			num = Math.floor(Math.random()*14);
		}
	}
}

function random_topics() {
	document.getElementById("col-1row1").innerHTML = topics[topic_index[0]];
	document.getElementById("col-2row1").innerHTML = topics[topic_index[1]];
	document.getElementById("col-1row2").innerHTML = topics[topic_index[2]];
	document.getElementById("col-2row2").innerHTML = topics[topic_index[3]];
	document.getElementById("col-3row2").innerHTML = topics[topic_index[4]];
	document.getElementById("col-1row3").innerHTML = topics[topic_index[5]];
	document.getElementById("col-2row3").innerHTML = topics[topic_index[6]];
}

window.onload = random_topics;