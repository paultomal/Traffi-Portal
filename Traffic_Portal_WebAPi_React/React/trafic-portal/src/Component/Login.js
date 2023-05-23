import React, { Components ,useState} from "react";
import 'bootstrap/dist/css/bootstrap.css';
import './Login.css';
import axios from "axios";
import { useNavigate } from "react-router-dom";


const Login = ()=>{
    let[token, setToken]= useState("");
    let[name, setName] = useState("");
    let[password, setPassword] =useState("");
    const navigate = useNavigate();

    const loginSubmit= ()=>{
        var obj = {email: name, password: password};
        console.log(obj);
        axios.post("http://127.0.0.1:8000/api/login",obj)
        .then(resp=>{
            var token = resp.data;
            console.log(token);
            var user = {emplyee_id: token.emplyee_id, access_token:token.token_key,role:token.role};
            localStorage.setItem('user',JSON.stringify(user));
            console.log(localStorage.getItem('user'));
            if(token == "invalid usser name or Password"){
                navigate('/tpf');
            }else{
                navigate('/tp');
            }
        }).catch(err=>{
            console.log(err);
        });


    }
    return(
        <div class="bgimg">
   <div class="centerdiv">
    <img src="https://cdn1.iconfinder.com/data/icons/flat-business-icons/128/user-128.png" id="profilepic"></img>
    <h2>user login</h2>
    <div className="d-flex justify-content-center">
            <div className="from-group">
            <form>
                <label className="form-label">Email</label>
                <input className="form-control" type="email" value={name} onChange={(e)=>setName(e.target.value)}></input>
                <label className="form-label">Password</label>
                <input className="form-control" type="password" value={password} onChange={(e)=>setPassword(e.target.value)}></input>

            </form>
            <br></br>
                <button  onClick={loginSubmit}>Login</button>
        </div>
        </div>
   </div>
  </div>
        

    )
}
export default Login;  