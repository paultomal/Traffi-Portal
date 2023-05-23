import React, { Components ,useState} from "react";
import 'bootstrap/dist/css/bootstrap.css';
import './Usercopy.css';
import axios from "axios";
import { useNavigate } from "react-router-dom";


const Reg = ()=>{
    let[token, setToken]= useState("");
    let[name, setName] = useState("");
    let[age, setAge] = useState("");
    let[email, setEmail] = useState("");
    let[phn, setPhn] = useState("");
    let[adrs, setAddress] = useState("");
    let[password, setPassword] =useState("");
    const navigate = useNavigate();

    const RegSubmit= ()=>{
        var obj = {name: name,  age: age, email: email, phn: phn, adrs: adrs, password: password};
        console.log(obj);
        axios.post("http://127.0.0.1:8000/api/reg",obj)
        .then(resp=>{
            // var token = resp.data;
            // console.log(token);
            // var user = {emplyee_id: token.emplyee_id, access_token:token.token_key,role:token.role};
            // localStorage.setItem('user',JSON.stringify(user));
            // console.log(localStorage.getItem('user'));
            // if(token == "invalid usser name or Password"){
            //     navigate('/login');
            // }else{
                navigate('/login');
            // }
        }).catch(err=>{
            console.log(err);
        });


    }
    return(
        <div class="bgimg">
   <div class="centerdiv">
    <h2>user Registrartion</h2>
    <div className="d-flex justify-content-center">
            <div className="from-group">
            <form>
                <label className="form-label">Name</label>
                <input className="form-control" type="text" value={name} onChange={(e)=>setName(e.target.value)}></input>
                
                <label className="form-label">Age</label>
                <input className="form-control" type="number" value={age} onChange={(e)=>setAge(e.target.value)}></input>

                <label className="form-label">Email</label>
                <input className="form-control" type="email" value={email} onChange={(e)=>setEmail(e.target.value)}></input>
                
                <label className="form-label">Phone no</label>
                <input className="form-control" type="text" value={phn} onChange={(e)=>setPhn(e.target.value)}></input>
                
                <label className="form-label">Address</label>
                <input className="form-control" type="text" value={adrs} onChange={(e)=>setAddress(e.target.value)}></input>
                
                
                <label className="form-label">Password</label>
                <input className="form-control" type="password" value={password} onChange={(e)=>setPassword(e.target.value)}></input>

            </form>
            <br></br>
                <button  onClick={RegSubmit}>Signup</button>
        </div>
        </div>
   </div>
  </div>
        

    )
}
export default Reg;  