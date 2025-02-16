// Options the user could type in
let date = new Date();
var currentdate = new Date().toLocaleDateString();
var time = new Date().toLocaleTimeString();

const prompts = [
    ["hi", "hey", "hello", "good morning", "good afternoon"],
    ["how are you", "how is life", "how are things"],
    ["what are you doing", "what is going on", "what is up"],
    ["how old are you"],
    ["who are you", "are you human", "are you bot", "are you human or bot"],
    ["who created you", "who made you"],
    [
      "your name please",
      "your name",
      "may i know your name",
      "what is your name",
      "what do you call yourself"
    ],
    ["i love you"],
    ["happy", "good", "fun", "wonderful", "fantastic", "cool"],
    ["bad", "bored", "tired"],
    ["help me", "tell me story", "tell me joke"],
    ["ah", "yes", "ok", "okay", "nice"],
    ["bye", "good bye", "goodbye", "see you later"],
    ["how can I save money with ExpirySaver?", "how does ExpirySaver work?", "how can I use ExpirySaver?", "how can I get discounted products from ExpirySaver?", "where can I buy discounted food on ExpirySaver?"],
    ["bro"],
    ["what", "why", "how", "where", "when"],
    ["no", "not sure", "maybe", "no thanks"],
    [""],
    ["haha", "ha", "lol", "hehe", "funny", "joke"],
    ["expiry products", "discount food", "discounted products", "products near expiration"],
    ["date"],
    ["time"],
    ["how can I donate food?", "food donation", "can I donate food?", "how to donate food to ExpirySaver?"],
    ["trust in ExpirySaver", "Expirysaver mission", "Expirysaver purpose", "what is the mission of ExpirySaver?", "what does ExpirySaver stand for?"],
    ["tell a joke"],
    ["how can I package my food donations?", "how to package food", "food packaging", "how to pack food for donation"],
    ["how is my donation used?", "how is food donated used?", "what happens to my food donation?", "how will ExpirySaver use my donation?"],
    ["can I donate cooked food?", "cooked food donation", "donating cooked food", "can I donate prepared food?", "can I donate cooked meals to ExpirySaver?"],
    ["what are the guidelines for donating food?", "donation guidelines", "food donation rules"]
]

// Possible responses, in corresponding order
const replies = [
    ["Hello!", "Hi!", "Hey!", "Hi there!", "Howdy"],
    [
      "Fine... how are you?",
      "Pretty well, how are you?",
      "Fantastic, how are you?"
    ],
    [
      "Nothing much",
      "About to go to sleep",
      "Can you guess?",
      "I don't know actually"
    ],
    ["I am infinite"],
    ["I am just a bot", "I am a bot. What are you?"],
    ["Developed by ExpirySaver team"],
    ["I am ExpirySaver's chatbot"],
    ["I love you too", "Me too"],
    ["Have you ever felt bad?", "Glad to hear it"],
    ["Why?", "Why? You shouldn't!", "Try watching TV"],
    ["What about?", "Once upon a time..."],
    ["Tell me a story", "Tell me a joke", "Tell me about yourself"],
    ["Bye", "Goodbye", "See you later"],
    ["You can save money by purchasing discounted food products from local stores that are near their expiration date. ExpirySaver helps you reduce food waste and save money."],
    ["Bro!"],
    ["Great question"],
    ["That's ok", "I understand", "What do you want to talk about?"],
    ["Please say something :("],
    ["Haha!", "Good one!"],
    ["The basic concept of ExpirySaver is to offer discounted food products that are nearing their expiration date. You can save money and reduce food waste by purchasing these products."],
    [currentdate],
    [time],
    ["You can donate food items like raw or cooked foods, as well as pre-packaged products to ExpirySaver."],
    ["Your donation will be used to support ExpirySaver's mission of reducing food waste and helping those in need by providing affordable food options to the community."],
    ["Yes, you can donate cooked food as long as it is prepared in a licensed kitchen, packaged properly, and kept at safe temperatures. Please contact us for further instructions and guidelines."],
    ["When donating food, please ensure that it is safe, properly packaged, and within its expiration date. ExpirySaver cannot accept expired food items."],
    ["To donate food, simply visit the donation page, fill in the details of the food you're donating, and submit it to ExpirySaver. We will review and guide you on the next steps."],
    ["ExpirySaver works by collecting excess food from donors, especially those nearing expiration, and offering them to consumers at a discounted price to help reduce food waste."],
    ["You can buy discounted products from local stores or online via the ExpirySaver platform. Simply check the available discounted food options and make a purchase before they expire."],
    ["The ExpirySaver mission is to reduce food waste by enabling stores to sell surplus food nearing its expiration date at discounted prices, allowing consumers to save money while reducing waste."],
    ["The mission of ExpirySaver is to connect people with affordable food options by offering products that are nearing their expiration date, preventing waste and helping those in need."],
    ["If you want to donate food to ExpirySaver, ensure that it is fresh, properly packaged, and safe for consumption. Visit the donation page on our platform for more details."],
    ["The food donated to ExpirySaver will be redistributed to consumers via our platform, helping reduce food waste and providing affordable options for those who may not have access otherwise."],
    ["When donating cooked food, please ensure that it is fresh, properly packaged, and complies with food safety standards. You can contact ExpirySaver for further instructions."],
    ["If you would like to donate cooked meals, they should be prepared in a licensed kitchen, stored at safe temperatures, and sealed in airtight containers to ensure freshness and safety."],
    ["To donate food, please make sure that items are sealed in containers, clearly labeled with the type of food, and within their expiry dates. ExpirySaver cannot accept food past its expiration date."]
]

// Random for any other user input
const alternative = [
    " 😢Sorry, I am still under development."
]

// Whatever else you want :)
const coronavirus = ["Please stay home", "Wear a mask", "Fortunately, I don't have COVID", "These are uncertain times"]
