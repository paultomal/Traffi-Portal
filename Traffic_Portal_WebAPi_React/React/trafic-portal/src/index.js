import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import reportWebVitals from './reportWebVitals';
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom';
import Tp_head from './Component/Traffic_point/Tp_head';
import Tp_Home from './Component/Traffic_point/Tp_Home';
import Tp_Fail from './Component/Traffic_point/Tp_Fail';
import Login from './Component/Login';
import Reg from './Component/Reg';


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <Router>
    <Tp_head/>
      <Routes>
      
      <Route exact path='/tp' element={<Tp_Home />} />
      <Route exact path='/login' element={<Login />} />
      <Route exact path='/reg' element={<Reg />} />
      <Route exact path='/tpf' element={<Tp_Fail />} />
      
      </Routes>
    </Router>
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
