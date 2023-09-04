<?php

{/* <input name="other" /> */}
{/* <input name="num" /> */} // selected
{/* <input name="symbol" /> */} // selected
document.querySelectorAll("[name='num'],[name='symbol']")
    .forEach(button => {
        button.addEventListener("click", function() {
            display.value += this.value;
        });
    });
{/* <input name="other" /> */}
{/* <input name="num" /> */} // selected
{/* <input name="symbol" /> */}
document.querySelector("[name='num'],[name='symbol']")
    .addEventListener("click", function() {
        display.value += this.value;
    });
{/* <button /> */}
{/* <input name="other" /> */} // selected
{/* <input class="btn" /> */} // selected
document.querySelectorAll("input");
{/* <input id="btn" /> */}
{/* <input class="btn btn-success me-2" /> */} // selected
{/* <input class="btn" /> */} // selected
document.querySelectorAll(".btn");
{/* <input class="btn" /> */}
{/* <input id="btn" /> */} // selected
document.querySelectorAll("#btn");
{/* <input class="btn btn-success me-2" /> */}
{/* <input class="btn" /> */} // selected
document.querySelector("[class=btn]");


?>