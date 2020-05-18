<div class="modal-dialog login animated">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <!-- <h4 class="modal-title">Login with</h4>-->
        </div>
        <div class="modal-body">
            <div class="box">

                <form id="loginform"  method="post" >


<br><br>
                    <table>
                        <input class="checkbox-budget" type="radio" id="buttoncliente" name="choice" value="cliente" checked>
                        <label class="form-bottoni" for="buttoncliente">
                            <span data-hover="Cliente">Cliente</span>
                        </label><!--
						--><input class="checkbox-budget" type="radio" id="buttonsocio" name="choice" value="socio">
                        <label class="form-bottoni" for="buttonsocio">
                            <span data-hover="Socio">Socio</span>
                        </label>


                </table>

                    <div class="error"></div>
                        <div class="form loginBox" id="loginForm">
                                <table  align="center" ><td> <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <br>
                                <input class="form-bottoni" type="button" name='accedi' value="ACCEDI" onclick="loginAjax()" >
                                    </td>   </table>
                        </div>
                </form>

                </div> </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openForm() {
        document.getElementById("loginForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("loginForm").style.display = "none";
    }

    /* Flap cliente/socio radio button*/

    const st = {};

    st.flap = document.querySelector('#flap');
    st.toggle = document.querySelector('.toggle');

    st.buttoncliente = document.querySelector('#buttoncliente');
    st.buttonsocio = document.querySelector('#buttonsocio');

    st.flap.addEventListener('transitionend', () => {

        if (st.buttoncliente.checked) {
            st.toggle.style.transform = 'rotateY(-15deg)';
            setTimeout(() => st.toggle.style.transform = '', 400);
        } else {
            st.toggle.style.transform = 'rotateY(15deg)';
            setTimeout(() => st.toggle.style.transform = '', 400);
        }

    })

    st.clickHandler = (e) => {

        if (e.target.tagName === 'LABEL') {
            setTimeout(() => {
                st.flap.children[0].textContent = e.target.textContent;
            }, 250);
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        st.flap.children[0].textContent = st.buttonsocio.nextElementSibling.textContent;
    });

    document.addEventListener('click', (e) => st.clickHandler(e));

</script>


