getYear = function () {
  return new Date().getFullYear();
};
getMonth = function () {
  return new Date().getMonth() + 1;
};
getDay = function () {
  return new Date().getDay();
};
getDate = function () {
  return new Date().getDate();
};
getHours = function () {
  return new Date().getHours();
};
getMinutes = function () {
  return new Date().getMinutes();
};
getSeconds = function () {
  return new Date().getSeconds();
};
module.exports = {
  getYear,
  getMonth,
  getDay,
  getDate,
  getHours,
  getMinutes,
  getSeconds,
};
