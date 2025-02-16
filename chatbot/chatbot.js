document.addEventListener("DOMContentLoaded", () => {
  const inputField = document.getElementById("input");
  inputField.addEventListener("keydown", (e) => {
      if (e.code === "Enter" || e.keyCode === 13) {
          let input = inputField.value;
          inputField.value = "";
          output(input);
      }
  });
});

function output(input) {
  let product;

  // Text manipülasyonu ve eşleşmeleri kolaylaştırmak için string üzerinde düzenlemeler
  let text = input.toLowerCase()
      .replace(/[^\w\s]/gi, "")  // Özel karakterleri kaldır
      .replace(/[\d]/gi, "")     // Sayıları kaldır
      .trim()
      .replace(/ a /g, " ")      // 'tell me a story' -> 'tell me story'
      .replace(/i feel /g, "")
      .replace(/whats/g, "what is")
      .replace(/please /g, "")
      .replace(/ please/g, "")
      .replace(/r u/g, "are you")
      .replace(/tell about /g, "");

  // prompts ve replies arasında eşleşme kontrolü
  let matchedResponse = compare(prompts, replies, text); 

  if (matchedResponse) {
      // Eğer eşleşme bulunduysa, yanıtı ver
      product = matchedResponse;
  } else if (text.match(/thank/gi)) {
      // "thank" kelimesi içeren bir şey yazılırsa
      product = "You're welcome!";
  } else if (text.match(/(corona|covid|virus)/gi)) {
      // "corona", "covid" ya da "virus" kelimeleri varsa
      product = coronavirus[Math.floor(Math.random() * coronavirus.length)];
  } else {
      // Eğer hiçbiri eşleşmezse rastgele bir alternatif mesaj
      product = alternative[Math.floor(Math.random() * alternative.length)];
  }

  // DOM güncellemesi
  addChat(input, product);
}

function compare(promptsArray, repliesArray, string) {
  let reply;
  let replyFound = false;

  // promptsArray içinde döngü ile eşleşme arıyoruz
  for (let x = 0; x < promptsArray.length; x++) {
      for (let y = 0; y < promptsArray[x].length; y++) {
          if (promptsArray[x][y] === string) {
              let replies = repliesArray[x];
              reply = replies[Math.floor(Math.random() * replies.length)];
              replyFound = true;
              // Eşleşme bulunduğunda döngüyü sonlandır
              break;
          }
      }
      if (replyFound) {
          // Eşleşme bulunduysa dış döngüyü de sonlandır
          break;
      }
  }
  return reply;
}

function addChat(input, product) {
  const messagesContainer = document.getElementById("messages");

  // Kullanıcı mesajını ekleme
  let userDiv = document.createElement("div");
  userDiv.id = "user";
  userDiv.className = "user response";
  userDiv.innerHTML = `<img src="img/user.png" class="avatar"><span>${input}</span>`;
  messagesContainer.appendChild(userDiv);

  // Bot mesajını ekleme
  let botDiv = document.createElement("div");
  let botImg = document.createElement("img");
  let botText = document.createElement("span");
  botDiv.id = "bot";
  botImg.src = "img/bot-mini.png";
  botImg.className = "avatar";
  botDiv.className = "bot response";
  botText.innerText = "Typing...";
  botDiv.appendChild(botText);
  botDiv.appendChild(botImg);
  messagesContainer.appendChild(botDiv);
  
  // Mesajları en güncel tutma
  messagesContainer.scrollTop = messagesContainer.scrollHeight - messagesContainer.clientHeight;

  // 1.5s - 3s arasında rastgele bir gecikme ile bot yanıtını gösterme
  setTimeout(() => {
      botText.innerText = `${product}`;
      textToSpeech(product);  // Eğer sesli yanıt eklenmişse
  }, Math.random() * (3000 - 1500) + 1500);  // 1.5 saniye ile 3 saniye arasında rastgele gecikme
}
